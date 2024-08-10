{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


@extends('main.master')
@section('shop')

<section id="collection" class="py-5" style="padding-top: 7rem !important">
    <div class="container">
        <div class="g-7 row justify-content-center">
            <form class="box" method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Register</h1>
                <p class="text-muted">Please enter your details to create an account!</p>

                <!-- Name -->
                <div>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="enter your username">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="enter your email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="enter your password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="confirm  password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <input type="submit" value="Register">

                <div class="col-md-12">
                    <div class="flex items-center justify-end mt-2 option">
                        <span>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 forgot" href="{{ route('login') }}">
                                {{ __('Already registered? Login') }}
                            </a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

<style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url({{asset('main/img/logo/bgd.jpg')}});
}

@media and screen (max-width: 850px) {
    body {
        background-image: none !important;
    }
    .register {
        font-size: 0.6rem !important;
    }
}

@media(max-width: 950px) {
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-position: center;
        background-repeat: no-repeat;
        background-position: 0;
        background-image: url({{asset('main/img/logo/fst.jpg')}});
    }

    .card {
        border: none;
        max-height: 40vh !important;
    }
}

.card {
    margin-bottom: 20px;
    border: none;
    min-height: 100vh !important;
}

.box {
    padding: 1.5rem;
    background: rgba(30, 26, 26, 0.8);
    text-align: center;
    transition: 0.25s;
    margin-top: 2rem !important;
    border-radius: 15px;
}

.box input[type="text"],
.box input[type="email"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 15px auto;
    text-align: center;
    border: 3px solid #89978f;
    padding: 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type="text"]:focus,
.box input[type="email"]:focus,
.box input[type="password"]:focus {
    width: 220px;
    border-color: #ffffff;
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 15px auto;
    text-align: center;
    border: 3px solid #f6f6f6;
    padding: 12px 30px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type="submit"]:hover {
    background: #000000;
}

.forgot, .register {
    text-decoration: underline;
    color: #ffffff;
    padding: 1rem;
}

.forgot:hover, .register:hover {
    text-decoration: none;
    background-color: white;
    color: black;
    font-size: 1rem;
    border: solid 2px rgb(255, 255, 255);
    border-radius: 5px;
}

@media(max-width: 480px) {
    .option {
        font-size: 0.7rem !important;
    }
}

@media screen and (min-width: 768px) {
    .box {
        max-width: 30rem !important;
        padding: 1.5rem;
        background: rgba(30, 26, 26, 0.8);
        text-align: center;
        transition: 0.25s;
        margin-top: 2rem !important;
        border-radius: 15px;
    }
}

</style>
