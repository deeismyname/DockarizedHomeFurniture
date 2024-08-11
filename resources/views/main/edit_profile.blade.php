@extends('main.master')
@section('shop')

<section class="gradient-custom-2" >
    <div class="container py-4">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-12 col-xl-12" style="padding-top: 8rem !important;">
          <div class="card">

            @include('main.components.profile_section')

            <div class="card-body p-4 text-black change_password card chng_pass" style="padding: 2rem;">
                <div class="details mb-4" style="display: flex;">
                    <div class="col">
                        <p class="lead fw-normal mb-1">Edit Profile</p>
                    </div>
                </div>

                <div id="collection" class="py-3">
                    <div class="container">
                        <div class="row g-3">
                            <form class="box" method="POST" action="{{ route('update_profile') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="font-italic" style="padding: 0.5rem">Enter New Name: </label>
                                    <span><input id="name" class="block mt-1 w-full" type="text" name="name"/></span>
                                </div>

                                <div class="mb-3">
                                    <label class="font-italic" style="padding: 0.5rem">Enter New Email:  </label>
                                    <span><input id="email" class="block mt-1 w-full" type="email" name="email"/></span>
                                </div>

                                <div class="mb-3">
                                    <label class="font-italic" style="padding: 0.5rem">Enter New Phone:  </label>
                                    <span><input id="phone" class="block mt-1 w-full" type="text" name="phone"/></span>
                                </div>

                                <div class="button mt-3">
                                    <button type="submit" class="btn btn-danger text-uppercase mr-2 px-4">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="details" style="display: flex;">
                        <div class="col">
                            <p class="lead fw-normal mb-1">Password:</p>
                        </div>
                        <div class="col text-end">
                            <a href="{{route('edit_password')}}">
                                <button class="btn btn-danger text-uppercase mr-2 px-4 edit" style="z-index: 1;">
                                    <i class="fas fa-pen"></i> Reset
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="p-3" style="background-color: #f8f9fa;">
                        <h5 class="font-italic mb-1">Hello {{$user->name}},</h5>
                        <p>If you're worried your password might be compromised, or if you're just bored with your old password, click the reset button to change it now.</p>
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
    section{
       display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .edit{
        float: right;
        right: 0 !important;
    }

    .button{
        padding-bottom: 1rem !important;
    }

    button:hover{
        color: white !important;
        padding-bottom: 1rem;
    }

    input{
        border: solid rgb(86, 86, 86) 0.2rem;
        border-radius: 1rem;
    }

    .grid{
        display: grid;
        grid-template-columns: auto auto 1rem;
        padding-right: 1rem;
        flex-direction: row;
    }
    .left{
        /* padding-left: 30rem; */
        right: 0rem;
    }




.card{
   margin-bottom:20px;
    border:none;
    min-height: 80vh;
}

.box {
    width: 100% !important;
    /* padding: 4rem; */
    /* position: absolute; */
    /* top: 50%;
    left: 50%; */
    background:#f8f9fa;

    text-align: center;
    transition: 0.25s;
    margin-top: 10rem;
}

.box input[type="email"],
.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: grid;
    margin: 20px auto;
    text-align: center;
    border: 3px solid  #89978f;
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
.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 20rem;
    border-color: #000000
}



.box input[type="submit"]:hover {
    background: #000000;
    color: #f8f9fa
}

.hide{
    display: none;
}

/* @media screen and (max-width: 400px) {
    .box input[type="email"]:focus,
    .box input[type="text"],
.box input[type="password"]:focus {
    width: 15rem;
    border-color: #000000
} */

@media screen and (max-width: 400px) {
    .box input[type="email"],
    .box input[type="text"],
    .box input[type="password"] {
        width: 100%; /* Ensure the input takes up the full width of its parent */
        max-width: 90%; /* Prevent the input from exceeding the width of the parent element */
    }
}


.box input[type="email"],
.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: grid;
    margin: 5px auto;
    text-align: center;
    border: 3px solid  #89978f;
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

        toggle.style.display="none";

</script>


