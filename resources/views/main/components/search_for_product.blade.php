<div class="search expand-lg ">
    <div class="row">
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
    .search{
        justify-content: center !important;
        display:flex !important;
        max-hieght:20rem !important;
        position: relative;

        padding-top: 10rem !important;
        background-color: rgba(132, 131, 131, 0.1);
    }
    form{
        justify-content: center !important;
        align-content: center;
        align-items: center;
    }

    input{
        text-align: center !important;
    }
</style>


