<div class="header">
    <nav class = "navbar navbar-expand-lg navbar-dark  bg-dark py-4 fixed-top">
        <div class = "container">
   <!-- Start Header Logo -->
   <div class="header-logo">
    <div style="text-align: center">
        <div><img  src = "{{asset('main/img/logo/hflg-t.png')}}" style="width: 5rem !important;"  alt = "site icon"></div>
        <div>Home Furniture</div>
    </div>
</div>
<!-- End Header Logo -->


            {{-- login --}}
            <div class = "order-lg-2 nav-btns">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth

                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect light" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <div style="color: whitesmoke; display:flex !important; justify-content:space-between">
                                <i class = "fas fa-address-card"></i>
                                <h6 style="padding-left: 0.6rem; padding-right: 0.6rem;">{{Auth::user()->name}}</h6>
                                <i class="	fa fa-angle-down"></i>
                            </div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="{{route('profile')}}"><i class="fa fa-portrait"></i>
                            Profile</a>
                        <a class="dropdown-item" href=""><i class="fa fa-shopping-cart"></i> My Orders</a>

                        <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i>
                            Lock screen</a>
                        <div class="dropdown-divider "></div>

                        <div class="logout">
                            <form action="{{route('logout')}}">
                                <button type="submit" class="btn stn header-item waves-effect light" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" ><i class="fa fa-sharp fa-solid fa-power-off text-danger"></i> Logout
                            </button>

                            </form>
                        </div>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}"><div style="text-decoration: none">
                        <button type = "button" class = "btn btn-light position-relative login">
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

    .bg-dark{
        background-color: rgb(27, 30, 34) !important;
    }

    @media screen (max-width: 1280px) {
        nav-btns{
        width: 3rem !important;

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
    .login{
        max-width: 3rem !important;
        font-size: 1rem;

    }
  }

  .stn:hover{
    background-color: black !important;
    color: white;
    padding-left: 1rem;
}
.logout{
    justify-content: center;
    padding: 0.5rem !important;
}
</style>


