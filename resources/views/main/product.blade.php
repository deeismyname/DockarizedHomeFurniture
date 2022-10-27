@extends('main.master')

@section('shop')
    {{-- <section>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-8 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image">
                                <img src="{{ asset($product->primary_image) }}" id="main_product_image" width="350">
                            </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail">
                                    <li><img onclick="changeImage(this)" src="{{ asset($product->primary_image) }}"
                                            width="70"></li>
                                    <li><img onclick="changeImage(this)" src="{{ asset($product->image_1) }}"
                                            width="70"></li>
                                    <li><img onclick="changeImage(this)" src="{{ asset($product->image_2) }}"
                                            width="70"></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 right-side d-flex flex-column justify-content-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>IIlana</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                            </div>
                            <div class="mt-2 pr-3 content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et
                                    dolore magna aliqua</p>
                            </div>
                            <h3>$430.99</h3>
                            <div class="ratings d-flex flex-row align-items-center">
                                <div class="d-flex flex-row">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <span>441 reviews</span>
                            </div>
                            <div class="mt-5">
                                <span class="fw-bold">Color</span>
                                <div class="colors">
                                    <ul id="marker">
                                        <li id="marker-1"></li>
                                        <li id="marker-2"></li>
                                        <li id="marker-3"></li>
                                        <li id="marker-4"></li>
                                        <li id="marker-5"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <button class="btn btn-outline-dark">Buy Now</button>
                                <button class="btn btn-dark">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <section>
        <div class="container mt-5 mb-12">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                            src="{{ asset($product->primary_image) }}" width="290" /> </div>
                                    <div class="thumbnail text-center">
                                        <img onclick="change_image(this)" src="{{ asset($product->primary_image) }}"
                                            width="70">
                                        <img onclick="change_image(this)" src="{{ asset($product->image_1) }}"
                                            width="70">
                                        <img onclick="change_image(this)" src="{{ asset($product->image_2) }}"
                                            width="70">
                                        <img onclick="change_image(this)" src="{{ asset($product->video_description) }}"
                                            width="70">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="product p-4  justify-content-between align-items-center">

                                    <div class="mt-4 mb-3"> <span
                                            class="text-uppercase text-muted brand">{{ $product->category }}</span>
                                        <h5 class="text-uppercase">{{ $product->name }}</h5>
                                        <div class="price d-flex flex-row align-items-center"> <span class="act-price">Gh₵
                                                {{ $product->price }}.00</span>
                                        </div>
                                    </div>
                                    <span><h5>Product Details:</h5></span> <span> <p class="about">{{ $product->description }}</p></span>

                                    <div class="sizes mt-5">
                                        <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                                name="size" value="S" checked> <span>S</span> </label> <label
                                            class="radio"> <input type="radio" name="size" value="M">
                                            <span>M</span> </label> <label class="radio"> <input type="radio"
                                                name="size" value="L"> <span>L</span> </label> <label
                                            class="radio"> <input type="radio" name="size" value="XL">
                                            <span>XL</span> </label> <label class="radio"> <input type="radio"
                                                name="size" value="XXL"> <span>XXL</span> </label>
                                    </div>
                                    <div class="cart mt-4 align-items-center">
                                        <button class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</button>
                                        <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button>
                                    </div>
                                    <div class="cart mt-4 align-items-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<link rel="stylesheet" href="{{ asset('main/assets/product.css') }}">


<script>
    function change_image(image) {

        var container = document.getElementById("main-image");

        container.src = image.src;
    }

    document.addEventListener("DOMContentLoaded", function(event) {

    });
</script>
