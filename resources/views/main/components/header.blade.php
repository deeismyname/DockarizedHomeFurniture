<nav class = "navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
    <div class = "container">
<div style="text-align: center">
    <div><img  src = "{{asset('main/img/logo/hflg-t.png')}}" style="width: 5rem !important;" alt = "site icon"></div>
    <div>Home Furniture</div>
</div>
            {{-- <span class = "text-uppercase fw-lighter ms-2">Home Furniture</span> --}}


        <div class = "order-lg-2 nav-btns" style="padding-rigth:8rem !important; ">
            <button type = "button" class = "btn btn-light position-relative">
                <i class = "fa fa-search"></i>
            </button>
        </div>
        <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn btn-light position-relative">
                <i class = "fas fa-address-card"></i>
            </button>
        </div>

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
