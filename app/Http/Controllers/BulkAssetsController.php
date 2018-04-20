<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BulkAssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the bulk edit page.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return View
     * @internal param int $assetId
     * @since [v2.0]
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the bulk edit page.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return View
     * @internal param int $assetId
     * @since [v2.0]
     */
    public function show(Request $request)
    {

    }

    /**
     * Display the bulk edit page.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return View
     * @internal param int $assetId
     * @since [v2.0]
     */
    public function edit(Request $request)
    {
        $this->authorize('update', Asset::class);

        if (!$request->filled('ids')) {
            return redirect()->back()->with('error', 'No assets selected');
        }

        $asset_raw_array = $request->input('ids');
        foreach ($asset_raw_array as $asset_id => $value) {
            $asset_ids[] = $asset_id;
        }


        if ($request->filled('bulk_actions')) {
            if ($request->input('bulk_actions')=='labels') {
                $count = 0;
                return view('hardware/labels')
                    ->with('assets', Asset::find($asset_ids))
                    ->with('settings', Setting::getSettings())
                    ->with('count', $count);
            } elseif ($request->input('bulk_actions')=='delete') {
                $assets = Asset::with('assignedTo', 'location')->find($asset_ids);
                $assets->each(function ($asset) {
                    $this->authorize('delete', $asset);
                });
                return view('hardware/bulk-delete')->with('assets', $assets);
             // Bulk edit
            } elseif ($request->input('bulk_actions')=='edit') {
                return view('hardware/bulk')
                ->with('assets', request('ids'))
                ->with('statuslabel_list', Helper::statusLabelList())
                ->with(
                    'companies_list',
                    array('' => '') + array('clear' => trans('general.remove_company')) + Helper::companyList()
                );
            }
        }
        return redirect()->back()->with('error', 'No action selected');
    }

    /**
     * Save bulk edits
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return Redirect
     * @internal param array $assets
     * @since [v2.0]
     */
    public function update(Request $request)
    {
        $this->authorize('update', Asset::class);

        \Log::debug($request->input('ids'));

        if (($request->filled('ids')) && (count($request->input('ids')) > 0)) {
            $assets = $request->input('ids');
            if (($request->filled('purchase_date'))
                ||  ($request->filled('purchase_cost'))
                ||  ($request->filled('supplier_id'))
                ||  ($request->filled('order_number'))
                || ($request->filled('warranty_months'))
                || ($request->filled('rtd_location_id'))
                || ($request->filled('requestable'))
                ||  ($request->filled('company_id'))
                || ($request->filled('status_id'))
                ||  ($request->filled('model_id'))
            ) {
                foreach ($assets as $key => $value) {
                    $update_array = array();

                    if ($request->filled('purchase_date')) {
                        $update_array['purchase_date'] =  $request->input('purchase_date');
                    }
                    if ($request->filled('purchase_cost')) {
                        $update_array['purchase_cost'] =  Helper::ParseFloat($request->input('purchase_cost'));
                    }
                    if ($request->filled('supplier_id')) {
                        $update_array['supplier_id'] =  $request->input('supplier_id');
                    }
                    if ($request->filled('model_id')) {
                        $update_array['model_id'] =  $request->input('model_id');
                    }
                    if ($request->filled('company_id')) {
                        if ($request->input('company_id')=="clear") {
                            $update_array['company_id'] =  null;
                        } else {
                            $update_array['company_id'] =  $request->input('company_id');
                        }
                    }
                    if ($request->filled('order_number')) {
                        $update_array['order_number'] =  $request->input('order_number');
                    }
                    if ($request->filled('warranty_months')) {
                        $update_array['warranty_months'] =  $request->input('warranty_months');
                    }


                    if ($request->filled('rtd_location_id')) {
                        $update_array['rtd_location_id'] = $request->input('rtd_location_id');
                        if (($request->filled('update_real_loc'))
                            && (($request->input('update_real_loc')) == '1'))
                        {
                            $update_array['location_id'] = $request->input('rtd_location_id');
                        }
                    }

                    if ($request->filled('status_id')) {
                        $update_array['status_id'] = $request->input('status_id');
                    }
                    if ($request->filled('requestable')) {
                        $update_array['requestable'] = $request->input('requestable');
                    }

                    DB::table('assets')
                        ->where('id', $key)
                        ->update($update_array);
                } // endforeach
                return redirect()->route("hardware.index")->with('success', trans('admin/hardware/message.update.success'));
            // no values given, nothing to update
            }
            return redirect()->route("hardware.index")->with('warning', trans('admin/hardware/message.update.nothing_updated'));
        } // endif
        return redirect()->route("hardware.index")->with('warning', trans('No assets selected, so nothing was updated.'));
    }

    /**
     * Save bulk deleted.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return View
     * @internal param array $assets
     * @since [v2.0]
     */
    public function destroy(Request $request)
    {
        $this->authorize('delete', Asset::class);

        if ($request->filled('ids')) {
            $assets = Asset::find($request->get('ids'));
            foreach ($assets as $asset) {
                $update_array['deleted_at'] = date('Y-m-d H:i:s');
                $update_array['assigned_to'] = null;

                DB::table('assets')
                    ->where('id', $asset->id)
                    ->update($update_array);
            } // endforeach
            return redirect()->to("hardware")->with('success', trans('admin/hardware/message.delete.success'));
            // no values given, nothing to update
        }
        return redirect()->to("hardware")->with('info', trans('admin/hardware/message.delete.nothing_updated'));
    }

    /**
     * Show Bulk Checkout Page
     * @return View View to checkout multiple assets
     */
    public function showCheckout()
    {
        $this->authorize('checkout', Asset::class);
        // Filter out assets that are not deployable.

        return view('hardware/bulk-checkout')
            ->with('users_list', Helper::usersList());
    }

    /**
     * Process Multiple Checkout Request
     * @return View
     */
    public function storeCheckout(Request $request)
    {
        $admin = Auth::user();
        // Find checkout to type
        if (request('checkout_to_type')=='location') {
            $target = Location::find(request('assigned_location'));
        } elseif (request('checkout_to_type')=='asset') {
            $target = Asset::find(request('assigned_asset'));
        } elseif (request('checkout_to_type')=='user') {
            $target = User::find(request('assigned_user'));
        }

        if (!is_array($request->get('selected_assets'))) {
            return redirect()->route('hardware/bulkcheckout')->withInput()->with('error', trans('admin/hardware/message.checkout.no_assets_selected'));
        }

        $asset_ids = array_filter($request->get('selected_assets'));

        foreach ($asset_ids as $asset_id) {
            if ($target->id == $asset_id && request('checkout_to_type') =='asset') {
                return redirect()->back()->with('error', 'You cannot check an asset out to itself.');
            }
        }
        if (($request->filled('checkout_at')) && ($request->get('checkout_at')!= date("Y-m-d"))) {
            $checkout_at = e($request->get('checkout_at'));
        } else {
            $checkout_at = date("Y-m-d H:i:s");
        }

        if ($request->filled('expected_checkin')) {
            $expected_checkin = e($request->get('expected_checkin'));
        } else {
            $expected_checkin = '';
        }


        $errors = [];
        DB::transaction(function () use ($target, $admin, $checkout_at, $expected_checkin, $errors, $asset_ids, $request) {

            foreach ($asset_ids as $asset_id) {
                $asset = Asset::find($asset_id);
                $this->authorize('checkout', $asset);
                $error = $asset->checkOut($target, $admin, $checkout_at, $expected_checkin, e($request->get('note')), null);

                if ($target->location_id!='') {
                    $asset->location_id = $target->location_id;
                    $asset->unsetEventDispatcher();
                    $asset->save();

                }


                if ($error) {
                    array_merge_recursive($errors, $asset->getErrors()->toArray());
                }
            }
        });

        if (!$errors) {
          // Redirect to the new asset page
            return redirect()->to("hardware")->with('success', trans('admin/hardware/message.checkout.success'));
        }
          // Redirect to the asset management page with error
            return redirect()->to("hardware/bulk-checkout")->with('error', trans('admin/hardware/message.checkout.error'))->withErrors($errors);
    }
}
