<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Start Header Logo -->
            <div class="header-logo text-center">
                <a href="{{ route('redirect') }}">
                    <img src="{{ asset('main/img/logo/hflg-t.png') }}" style="width: 5rem;" alt="site icon">
                </a>
                <div>Home Furniture</div>
            </div>
            <!-- End Header Logo -->

            {{-- Login --}}
            <div class="nav-btns order-lg-2">
                @if (Route::has('login'))
                    <div class="d-inline-block">
                        @auth
                            <div class="dropdown user-dropdown">
                                <button class="btn header-item" id="page-header-user-dropdown" data-bs-toggle="dropdown">
                                    <div class="d-flex align-items-center text-white">
                                        <i class="fas fa-address-card"></i>
                                        <h6 class="ms-2 me-2">{{ Auth::user()->name }}</h6>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-portrait"></i> Profile</a>
                                    <a class="dropdown-item" href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i> My Orders</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="btn btn-light position-relative">
                                    Login: <i class="fas fa-address-card"></i>
                                </button>
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
            {{-- End Login --}}



            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="{{ route('redirect') }}">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="{{ route('shop.index') }}">Shop</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#special">Specials</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#blogs">Blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#about">About Us</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<style>
    .bg-dark {
        background-color: #1B1E22 !important;
    }

    .navbar {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .header-logo img {
        max-width: 100%;
    }

    .header-logo div {
        color: #ffffff;
    }

    .btn-light {
        color: #000;
    }

    .btn-light:hover {
        color: #fff !important;
        background-color: #000 !important;
    }

    .dropdown-menu a {
        color: #000;
    }

    .dropdown-item.text-danger {
        color: #dc3545 !important;
    }

    .dropdown-item.text-danger:hover {
        background-color: #f8d7da !important;
    }

    @media screen and (max-width: 1280px) {
        .nav-btns {
            width: 3rem !important;
        }
        .login {
            max-width: 3rem !important;
            font-size: 1rem;
        }
    }
</style>
