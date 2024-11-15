<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('redirect')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('set_page.index') }}">Welcome Image</a></li>
                        <li><a href="{{ route('set_page.create') }}">Add New</a></li>
                        {{-- <li><a href="{{ route('show_category.index') }}">Add new Image</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('products.index') }}">All products</a></li>
                        <li><a href="{{ route('products.create') }}">Create Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('show_category.index') }}">All Categories</a></li>
                        <li><a href="{{ route('show_category.create') }}">Create Category</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">About Page</a></li>
                        {{-- <li><a href="{{route('about.multi.image')}}">About Page Upload Images</a></li> --}}

                    </ul>
                </li>


                <li class="menu-title">Admin</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        {{-- <i class="fa fa-money"></i> --}}
                        <span>User Management</span>
                    </a>




                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('user_management.index')}}">All Users</a></li>
                        <li><a href="{{route('user_management.create')}}">Add New User</a></li>
                        {{-- <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Sales</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html">Transactions</a></li>
                        <li><a href="pages-timeline.html">Purchases</a></li>
                        <li><a href="pages-directory.html">Refunds</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
