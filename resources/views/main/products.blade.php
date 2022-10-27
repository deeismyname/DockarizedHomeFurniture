@extends('main.master')

@section('shop')

<section id = "collection" class = "py-5">
    <div class = "container">
        <div class = "title text-center">
            <h2 class = "position-relative d-inline-block">New Collection</h2>
        </div>

        <div class = "row g-0">
            <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button>
            </div>

            <div class = "collection-list mt-4 row gx-0 gy-3">

                @if ($product->count())
                @foreach ($product as $index => $product)
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <div class = "collection-img position-relative">
                        <img src = "{{$product->primary_image}}" class = "w-100">
                       <a href="{{route('shop.show', $product)}}"> <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">view</span></a>
                    </div>
                    <div class = "text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <h6 class = "text-capitalize my-1">{{$product->name}}</h6></p>
                        <span class = "fw-bold">Gh₵  {{$product->price}}.00</span>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</section>
@endsection
