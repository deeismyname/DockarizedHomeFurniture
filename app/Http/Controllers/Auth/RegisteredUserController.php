<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    // public function show(){
    //     $user = Auth()->user();

    //     return view('main.profile', compact('user'));
    // }

    public function show(){
        $user = Auth()->user();
        $total_orders = $user->orders()->count(); // Get the total number of orders
        $total_orders_completed = $user->orders()->where('status', 'paid')->count();
        $total_orders_incart = $user->orders()->where('status', 'incart')->count();
        $page_name = "profile";
        return view('main.profile', compact('user', 'total_orders', 'total_orders_completed', 'total_orders_incart', 'page_name')); // Pass $total_orders to the view
    }


    public function edit() {
        $user = Auth()->user();
        $total_orders = $user->orders()->count(); // Get the total number of orders
        $total_orders_completed = $user->orders()->where('status', 'paid')->count();
        $total_orders_incart = $user->orders()->where('status', 'incart')->count();
        return view('main.edit_profile', compact('user', 'total_orders', 'total_orders_completed', 'total_orders_incart'));
    }

    public function update (Request $request){
        // Retrieve the authenticated user
        $user = Auth::user();

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:15',
        ]);

        // Update the user's information
        $user->name = $request->input('name') ?? $user->name; // Only update if email is provided
        $user->email = $request->input('email') ?? $user->email; // Only update if email is provided
        $user->phone = $request->input('phone') ?? $user->phone; // Only update if phone is provided
        $user->save();

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }



     public function edit_password(){
         $user = Auth()->user();
         return view('main.change_password', compact('user'));
     }

    public function update_password (Request $request)
    {
        // dd($request);
        $request->validate([
            'oldpassword' => ['required','string','min:8'],
            'newpassword' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPasswCordStatus = Hash::check($request->oldpassword, auth()->user()->password);
        dd($currentPasswCordStatus);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->newpassword),

            ]);

            //dd($request->password);
            return redirect()->route('profile')->with('message','Password Updated Successfully');

        }else{

            return redirect()->back()->with('message','Current Password does not match with Old Password');
        }
    }
}
