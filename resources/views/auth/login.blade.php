 {{-- <x-guest-layout class="main">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div >



            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Not a member? register') }}
                    </a>
                </div>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('main.master')
@section('shop')




    <section id="collection" class="py-5" style="padding-top: 13rem !important">
        <div class="container">


            <div class="row g-7">

                <form  class="box" style="top: 50rem" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>

                    <div>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus >
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600" style="color: #ffffff">{{ __('Remember me') }}</span>
                        </label>
                    </div >

                    <input type="submit" name="" value="Login" href="#">

                    <div class="col-md-12">
                        <div class="flex items-center justify-end mt-4">
                            <span>
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 forgot " href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            </span>
                            <span>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 register" href="{{ route('register') }}">
                                    {{ __('Not a member? register') }}
                                </a>
                            </span>
                        </div>
                    </div>
                </form>


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

    background-image: url({{asset('main/img/logo/bgd.jpg')}}) ;

}

.card{
   margin-bottom:20px;
    border:none;
    min-height: 100vh;
}

.box {
    width: 45rem;
    padding: 4rem;
    /* position: absolute; */
    top: 50%;
    left: 50%;
    background: rgb(30, 26, 26, 0.8);

    text-align: center;
    transition: 0.25s;
    margin-top: 10rem;
}

.box input[type="email"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 3px solid  #89978f;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="email"]:focus,
.box input[type="password"]:focus {
    width: 20rem;
    border-color: #ffffff
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 3px solid #f6f6f6;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #000000
}

.forgot {
    text-decoration: underline;
    color: #ffffff;
    padding: 1rem;
}

.register {
    text-decoration: underline;
    color: #ffffff;
    padding: 1rem;

}

.forgot:hover {
   text-decoration: none;
   background-color: white;
   color: black;
   font-size: 1rem;
   border: solid 5px rgb(255, 255, 255);
   border-radius: 5px;
}

.register:hover  {
   text-decoration: none;
   background-color: white;
   color: black;
   font-size: 1rem;
   border: solid 5px rgb(255, 255, 255);
   border-radius: 5px;
}

</style>
