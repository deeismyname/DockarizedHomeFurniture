@extends('main.master')
@section('shop')

<section id="collection" class="py-5 " style="padding-top: 7rem !important">
    <div class="container">
        <div class="g-7 row justify-content-center">
            <form class="box" method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>
                <p class="text-muted">Please enter your email and password!</p>

                <div>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="enter your email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="enter your password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600" style="color: #ffffff">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <input type="submit" value="Login">

                <div class="col-md-12">
                    <div class="flex items-center justify-end mt-2 option">
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
    /* max-width: 25rem !important; */
    padding: 1.5rem; /* Reduced padding */
    background: rgba(30, 26, 26, 0.8);
    text-align: center;
    transition: 0.25s;
    margin-top: 2rem !important; /* Reduced margin-top */
    border-radius: 15px; /* Added border-radius for softer edges */
}

.box input[type="email"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 15px auto; /* Reduced margin */
    text-align: center;
    border: 3px solid #89978f;
    padding: 10px;
    width: 200px; /* Reduced width */
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

.box input[type="email"]:focus,
.box input[type="password"]:focus {
    width: 220px; /* Slightly increased width on focus */
    border-color: #ffffff;
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 15px auto; /* Reduced margin */
    text-align: center;
    border: 3px solid #f6f6f6;
    padding: 12px 30px; /* Reduced padding */
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
        padding: 1.5rem; /* Reduced padding */
        background: rgba(30, 26, 26, 0.8);
        text-align: center;
        transition: 0.25s;
        margin-top: 2rem !important; /* Reduced margin-top */
        border-radius: 15px; /* Added border-radius for softer edges */
    }
}

</style>
