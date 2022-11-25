<div class="header">
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
        <div class = "container">
    
                {{-- <span class = "text-uppercase fw-lighter ms-2">Home Furniture</span> --}}


            <form action="{{route('search')}}">
                <div class = "order-lg-2 nav-btns" style="padding-rigth:8rem !important; ">
                    <button type = "submit" class = "btn btn-light position-relative">
                        <i class = "fa fa-search"></i>
                    </button>
                    <input type="text" name="query" placeholder="search">
                </div>
            </form>

            {{-- login --}}
            <div class = "order-lg-2 nav-btns">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth

                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect light" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <h6 style="color: whitesmoke"><i class = "fas fa-address-card"></i>   {{Auth::user()->name}}</h6>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href=""><i class="ri-user-line align-middle me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href=""><i class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>
                        <a class="dropdown-item d-block" href="#"><span
                                class="badge bg-success float-end mt-1">11</span><i
                                class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i>
                            Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href=""><i
                                class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>


                    {{-- <form action="" method="POST"><div style="text-decoration: none"><button type = "button" class = "btn btn-light position-relative">
                        logout: <i class = "fas fa-address-card"></i>
                    </button></div>
                </form> --}}
                @else
                    <a href="{{ route('login') }}"><div style="text-decoration: none">
                        <button type = "button" class = "btn btn-light position-relative">
                        login: <i class = "fas fa-address-card"></i>
                    </button></div>
                </a>

                @endauth
            </div>
        @endif
        </div>
             {{-- login --}}

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase " href = "{{route('redirect')}}">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase" href = "{{route('shop.index')}}">Shop</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase " href = "#special">specials</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase" href = "#blogs">blogs</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase" href = "#about">about us</a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase" href = "#popular">popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<style>
    @media screen and (max-width: 1280px) {
        nav-btns{
        width: 5rem !important;

    }
    .details{
        font-size: 1rem !important;
    }
    .details h3{
        font-size: 1rem !important;
    }
    .details h4{
        font-size: 1rem !important;
    }
    .details h5{
        font-size: 1rem !important;
    }
    .p-4 img{
        padding: 0;
        margin: 0;
    }
  }

</style>


