<?php

namespace App\Http\Requests;

use App\Models\SnipeModel;
use Intervention\Image\Facades\Image;
use enshrined\svgSanitize\Sanitizer;
use Storage;

class ImageUploadRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'mimes:png,gif,jpg,jpeg,svg,bmp,svg+xml',
            'avatar' => 'mimes:png,gif,jpg,jpeg,svg,bmp,svg+xml',
        ];
    }

    public function response(array $errors)
    {
        return $this->redirector->back()->withInput()->withErrors($errors, $this->errorBag);
    }

    /**
     * Handle and store any images attached to request
     * @param SnipeModel $item Item the image is associated with
     * @param String $path  location for uploaded images, defaults to uploads/plural of item type.
     * @return SnipeModel        Target asset is being checked out to.
     */
    public function handleImages($item, $w = 600, $fieldname = 'image', $path = null, $db_fieldname = 'image')
    {
        \Log::debug('Handle file upload');


        $type = strtolower(class_basename(get_class($item)));

        if (is_null($path)) {
            $path =  str_plural($type);

            if ($type=='assetmodel') {
                \Log::debug('This is an asset model! Override the path');
                $path =  'models';
            }

            if ($type=='user') {
                \Log::debug('This is a user! Override the path');
                $path =  'avatars';
            }
        }

        \Log::info('Path is: '.$path);
        \Log::debug('Type is: '.$type);
        \Log::debug('Image path is: '.$path);
        \Log::debug('Image fieldname is: '.$fieldname);
        \Log::debug('Trying to upload to '. $path);

        if ($this->hasFile($fieldname)) {

            if (!config('app.lock_passwords')) {

                if (!Storage::disk('public')->exists($path))
                {
                    \Log::debug($path);
                   // Storage::disk('public')->makeDirectory($path, 775);
                }

                if (!is_dir($path)) {
                    \Log::info($path.' does not exist');
                    //mkdir($path);
                }

                $image = $this->file($fieldname);
                $ext = $image->getClientOriginalExtension();
                $file_name = $type.'-'.str_random(18).'.'.$ext;

                \Log::info('File name will be: '.$file_name);

                if ($image->getClientOriginalExtension()!=='svg') {
                    \Log::debug('Not an SVG - resize');
                    \Log::debug('Trying to upload to: '.$path.'/'.$file_name);
                    $upload = Image::make($image->getRealPath())->resize(null, $w, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                     });

                    // This requires a string instead of an object, so we use ($string)
                    Storage::disk('public')->put($path.'/'.$file_name, (string)$upload->encode());

                // If the file is an SVG, we need to clean it and NOT encode it
                } else {
                    \Log::debug('This is an SVG');
                    $sanitizer = new Sanitizer();
                    $dirtySVG = file_get_contents($image->getRealPath());
                    $cleanSVG = $sanitizer->sanitize($dirtySVG);

                    try {
                        \Log::debug('Trying to upload to: '.$path.'/'.$file_name);
                        Storage::disk('public')->put($path.'/'.$file_name, $cleanSVG);
                    } catch (\Exception $e) {
                        \Log::debug('Upload no workie :( ');
                        \Log::debug($e);
                    }
                }


                 // Remove Current image if exists
                if (($item->{$fieldname}) && (Storage::disk('public')->exists($path.'/'.$item->{$fieldname}))) {
                    \Log::debug('A file already exists that we are replacing - we should delete the old one.');

                    // Assign the new filename as the fieldname
                    if (is_null($db_fieldname)) {
                        $item->{$fieldname} = $file_name;
                    } else {
                        $item->{$db_fieldname} = $file_name;
                    }
                    try {
                         Storage::disk('public')->delete($path.'/'.$item->{$fieldname});
                    } catch (\Exception $e) {
                        \Log::debug('Could not delete old file. '.$path.'/'.$item->{$fieldname}.' does not exist?');

                    }
                }

            }

        // If the user isn't uploading anything new but wants to delete their old image, do so
        } else {

            if ($this->input('image_delete')=='1') {

                try {


                    if (is_null($db_fieldname)) {
                        $item->{$fieldname} = null;
                        Storage::disk('public')->delete($path . '/' . $item->{$fieldname});
                    } else {
                        $item->{$db_fieldname} = null;
                        Storage::disk('public')->delete($path . '/' . $item->{$fieldname});
                    }

                } catch (\Exception $e) {
                    \Log::debug($e);
                }
            }

        }



        return $item;
    }
}
