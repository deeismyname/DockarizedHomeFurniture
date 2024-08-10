<div class="search expand-lg ">
    <div class="row" style="padding: 2rem !important">
    <span>
        <form action="{{route('search')}}">
            <div class = "order-lg-2 nav-btns" style="padding-rigth:5rem !important; ">
                <button type = "submit" class = "btn btn-dark position-relative">
                    <i class = "fa fa-search"></i>
                </button>
                <input type="text" name="query" placeholder="search">
            </div>
        </form>
    </span>
    </div>

</div>
<style>
    .search {
        justify-content: center !important;
        display: flex !important;
        max-height: 15rem !important;
        position: relative;
        padding-top: 5rem !important;
        background-color: rgba(132, 131, 131, 0.1);
    }

    form {
        justify-content: center !important;
        align-content: center;
        align-items: center;
    }

    input {
        text-align: center !important;
    }

    @media (max-width: 767px) {
        .search .nav-btns {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>




 {{-- <div class="search expand-lg" style="margin: 3rem !important">
    <div class="row">
        <span>
            <form action="{{route('search')}}">
                <div class="order-lg-2 nav-btns" style="padding-right: 5rem !important;">
                    <button type="submit" class="btn btn-dark position-relative">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" name="query" placeholder="search">
                </div>
            </form>
        </span>
    </div>
</div>

<style>
    .search {
        justify-content: center !important;
        display: flex !important;
        max-height: 10rem !important; /* Reduced max-height */
        position: relative;
        padding-top: 5rem !important; /* Reduced padding */
        background-color: rgba(132, 131, 131, 0.1);
    }

    form {
        justify-content: center !important;
        align-content: center;
        align-items: center;
    }

    input {
        text-align: center !important;
    }

    @media (max-width: 767px) {
        .search .nav-btns {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style> --}}
