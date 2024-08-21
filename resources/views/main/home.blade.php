@extends('main.master')
@section('shop')

    @include('main.components.search_for_product')


    @include('main.components.carousel')

    <!-- collection -->

    <!-- end of collection -->

    <!-- special products -->
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">New Arivals</h2>
            </div>


            <div class="special-list row g-0">
                @if ($products->count())
                    @foreach ($products as $index => $product)
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                            <div class="special-img position-relative overflow-hidden">
                                <img src="{{asset($product->primary_image)}}" class="w-100">
                                <span
                                    class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                    <i class="fas fa-heart"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <p class="text-capitalize mt-3 mb-1">{{$product->name}}</p>
                                <span class="fw-bold d-block">price: Gh₵ {{$product->price}}</span>
                                <a href="{{route('shop.show', $product->id)}}" class="btn btn-primary mt-3">View Product</a>
                            </div>
                        </div>
                    @endforeach

                @endif

            </div>

        </div>
    </section>
    <!-- end of special products -->

    <!-- blogs -->
    <section id="offers" class="py-5">
        <div class="container">
            <div
                class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class="offers-content">
                    <span class="text-white">Discount Up To 40%</span>
                    <h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>

@endsection




