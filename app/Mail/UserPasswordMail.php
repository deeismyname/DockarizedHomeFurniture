<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;

    // Constructor to pass user and password
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    // Build the email
    public function build()
    {
        return $this->subject('Your Account Has Been Created')
                    ->view('emails.user_password') // Define the email template
                    ->with([
                        'name' => $this->user->name,
                        'password' => $this->password,
                    ]);
    }
}

