@extends('main.master')
@section('shop')

    <section class="gradient-custom-2">
        <div class="container py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-lg-12 col-xl-12" style="padding-top: 8rem !important;">
                    <div class="card">

                        @include('main.components.profile_section')

                        <div class="card-body p-4 text-black change_password card chng_pass">
                            {{-- <div class="mb-5"> --}}

                            <div class="details" style="display: flex;">
                                <div class="col">
                                    <p class="lead fw-normal mb-1">Change Password</p>
                                </div>
                            </div>

                            <div id="collection" class="py-5">
                                <div class="container">

                                    <div class="message">
                                        @if (session('message'))
                                            <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                                        @endif



                                        @if ($errors->any())
                                            <ul class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <li class="text-danger">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="mm">
                                        @include('flash-message')


                                        @yield('content')
                                    </div>

                                    <div class="row g-7">

                                        <form class="box" style="top: 50rem" method="POST"
                                            action="{{ route('change_password') }}">
                                            @csrf
                                            <div>
                                                <label class="font-italic mb-1" style="padding: 1rem">Enter Old Password:
                                                </label>
                                                <span><input id="password" class="block mt-1 w-full" type="password"
                                                        name="current_password" required /></span>
                                            </div>

                                            <div>
                                                <label class="font-italic mb-1" style="padding: 1rem">Enter New Password:
                                                </label>
                                                <span><input id="password" class="block mt-1 w-full" type="password"
                                                        name="password" required /></span>
                                            </div>

                                            <div>
                                                <label class="font-italic mb-1" style="padding: 1rem">Confirm New Password:
                                                </label>
                                                <span><input id="password" class="block mt-1 w-full" type="password"
                                                    name="password_confirmation" required /></span>
                                            </div>

                                            <div class="button">
                                                <button type="submit" class="btn btn-danger text-uppercase mr-2 px-4">reset
                                                </button>
                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end of newsletter -->


@endsection


<style>
    section {
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .edit {
        float: right;
        right: 0 !important;
    }

    .button {
        padding-bottom: 1rem !important;
    }

    button:hover {
        color: white !important;
        padding-bottom: 1rem;
    }

    input {
        border: solid rgb(86, 86, 86) 0.2rem;
        border-radius: 1rem;
    }

    .grid {
        display: grid;
        grid-template-columns: auto auto 1rem;
        padding-right: 1rem;
        flex-direction: row;
    }

    .left {
        /* padding-left: 30rem; */
        right: 0rem;
    }




    .card {
        margin-bottom: 20px;
        border: none;
        min-height: 80vh;
    }

    .box {
        width: 100% !important;
        /* padding: 4rem; */
        /* position: absolute; */
        /* top: 50%;
    left: 50%; */
        background: #f8f9fa;

        text-align: center;
        transition: 0.25s;
        margin-top: 10rem;
    }

    .box input[type="email"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: grid;
        margin: 20px auto;
        text-align: center;
        border: 3px solid #89978f;
        padding: 10px 10px;
        width: 15rem;
        outline: none;
        color: rgb(0, 0, 0);
        border-radius: 24px;
        transition: 0.25s
    }

    .box h1 {
        color: rgb(0, 0, 0);
        text-transform: uppercase;
        font-weight: 500
    }

    .box input[type="email"]:focus,
    .box input[type="password"]:focus {
        width: 20rem;
        border-color: #000000
    }



    .box input[type="submit"]:hover {
        background: #000000;
        color: #f8f9fa
    }

    .hide {
        display: none;
    }

    @media screen and (max-width: 400px) {

        .box input[type="email"]:focus,
        .box input[type="password"]:focus {
            width: 15rem;
            border-color: #000000
        }

        .box input[type="email"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: grid;
            margin: 5px auto;
            text-align: center;
            border: 3px solid #89978f;
            padding: 5px 5px;
            width: 10rem;
            outline: none;
            color: rgb(0, 0, 0);
            border-radius: 24px;
            transition: 0.25s;
            line-height: 0rem !important;
        }

    }
</style>



<script>
    let toggle = document.querySelector(".toggle");

    toggle.style.display = "none";
</script>
