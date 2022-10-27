<nav class = "navbar navbar-expand-lg navbar-dark bg-dark py-4 fixed-top">
    <div class = "container">
        <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.html">
            <img src = "images/shopping-bag-icon.png" style="background-color: white;" alt = "site icon">
            <span class = "text-uppercase fw-lighter ms-2">Attire</span>
        </a>

        <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn btn-light position-relative">
                <i class = "fa fa-shopping-cart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary " style="border:2px solid rgb(240, 235, 235) ;">5</span>
            </button>
            <button type = "button" class = "btn btn-light position-relative">
                <i class = "fa fa-heart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" style="border:2px solid rgb(240, 235, 235) ;">2</span>
            </button>
            <button type = "button" class = "btn btn-light position-relative">
                <i class = "fa fa-search"></i>
            </button>
        </div>

        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase " href = "#">home</a>
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
