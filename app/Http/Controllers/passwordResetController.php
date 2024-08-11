<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class passwordResetController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $user = auth()->user();
        $total_orders = $user->orders()->count(); // Get the total number of orders
        $total_orders_completed = $user->orders()->where('status', 'paid')->count();
        $total_orders_incart = $user->orders()->where('status', 'incart')->count();
        return view('main.change_password', compact('user', 'total_orders', 'total_orders_completed', 'total_orders_incart'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required','string','min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        // dd($currentPasswordStatus);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('success','Password Updated Successfully');

        }else{

            return redirect()->back()->with('error','Current Password does not match with Old Password');
        }
    }
}
