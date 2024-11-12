<?php

namespace App\Http\Controllers;
Use App\Models\User;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str; // For generating random strings
use Illuminate\Support\Facades\Hash; // For hashing the password
use App\Mail\UserPasswordMail; // Assuming you will create a mailable

use Illuminate\Http\Request;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->status == 1){
            $users = User::all();
            return view('admin.all_users', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edit.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // Validate the incoming request (optional but recommended)
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'phone' => 'required|string',
    //         'status' => 'required|boolean', // Adjust the validation rule for status as per your need
    //     ]);

    //     // Create the user
    //     $create_user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'phone' => $validatedData['phone'],
    //         'status' => $validatedData['status'],
    //     ]);


    //     if($create_user){
    //         $notification = array(
    //             'message' => 'User created successfully',
    //             'alert-type' => 'success'
    //         );
    //         return redirect()->back()->with($notification);
    //     }else{
    //         $notification = array(
    //             'message' => 'Something went wrong',
    //             'alert-type' => 'Fail'
    //         );
    //         return redirect()->back()->with($notification);
    //     }
    // }

public function store(Request $request)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|string',
        'status' => 'required|boolean', // Adjust the validation rule for status as per your need
    ]);

    // Generate a random password
    $randomPassword = Str::random(8); // Generate a random password (8 characters)

    // Create the user with hashed password
    $create_user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'status' => $validatedData['status'],
        'password' => Hash::make($randomPassword), // Hash the random password
    ]);

    // If user creation is successful, send an email with the generated password
    if($create_user){
        // Send the email with the random password
        Mail::to($create_user->email)->send(new UserPasswordMail($create_user, $randomPassword));

        // Notification for success
        $notification = array(
            'message' => 'User created successfully and password has been sent to their email',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }else{
        // Notification for failure
        $notification = array(
            'message' => 'Something went wrong',
            'alert-type' => 'fail'
        );
        return redirect()->back()->with($notification);
    }
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
