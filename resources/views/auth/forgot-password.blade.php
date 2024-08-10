{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
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
            {{-- <form class="box" method="POST" action="{{ route('password.update') }}">
                @csrf
                <h1>Reset Password</h1>

                <div>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4" style="color: #000000 !important, border-radius: 1rem">
                    <x-primary-button >
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>

            </form> --}}
            <div class="box">
                <div class="mb-4 text-sm text-gray-600" style="color: #ffffff !important">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" style="color: #ffffff !important"/>

                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red !important"/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button style="color: #000000 !important; border: 1rem solid; border-radius: 1rem;">
                            {{ __('Click Here to Email Password Reset Link >>') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
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
