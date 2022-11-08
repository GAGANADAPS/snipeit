<?php

namespace App\Http\Controllers\Consumables;

use App\Events\CheckoutableCheckedOut;
use App\Http\Controllers\Controller;
use App\Models\Consumable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ConsumableCheckoutController extends Controller
{
    /**
     * Return a view to checkout a consumable to a user.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @see ConsumableCheckoutController::store() method that stores the data.
     * @since [v1.0]
     * @param int $consumableId
     * @return \Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create($consumableId)
    {
        if (is_null($consumable = Consumable::find($consumableId))) {
            return redirect()->route('consumables.index')->with('error', trans('admin/consumables/message.does_not_exist'));
        }
        $this->authorize('checkout', $consumable);

        return view('consumables/checkout', compact('consumable'));
    }

    /**
     * Saves the checkout information
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @see ConsumableCheckoutController::create() method that returns the form.
     * @since [v1.0]
     * @param int $consumableId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, $consumableId)
    {
        if (is_null($consumable = Consumable::find($consumableId))) {
            return redirect()->route('consumables.index')->with('error', trans('admin/consumables/message.not_found'));
        }

        // Validating input number and compared to currently remaining amount of stock
        $totalremaining = (int)$consumable->numRemaining();        
        $request->validate([
            'totalnum' => "required|regex:/^[0-9]*$/|gt:0|lte:$totalremaining"
          ],
          [
            'totalnum.gt'       => trans('admin/consumables/message.under'),
            'totalnum.lte'      => trans('admin/consumables/message.over'),
            'totalnum.required' => trans('admin/consumables/message.required'),
            'totalnum.regex'    => trans('admin/consumables/message.numeric'),
          ]);

        $this->authorize('checkout', $consumable);

        $admin_user = Auth::user();
        $assigned_to = e($request->input('assigned_to'));

        // Check if the user exists
        if (is_null($user = User::find($assigned_to))) {
            // Redirect to the consumable management page with error
            return redirect()->route('checkout/consumable', $consumable)->with('error', trans('admin/consumables/message.checkout.user_does_not_exist'));
        }

        // Update the consumable data
        $consumable->assigned_to = e($request->input('assigned_to'));

        $consumable->users()->attach($consumable->id, [
            'consumable_id' => $consumable->id,
            'user_id'       => $admin_user->id,
            'assigned_to'   => e($request->input('assigned_to')),
            'totalnum'      => e($request->input('totalnum')),
            'checkoutnote'  => e($request->input('checkoutnote'))
        ]);

        event(new CheckoutableCheckedOut($consumable, $user, Auth::user(), $request->input('note'), $request->input('totalnum')));

        // Redirect to the new consumable page
        return redirect()->route('consumables.index')->with('success', trans('admin/consumables/message.checkout.success'));
    }
}
