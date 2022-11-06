@extends('main.master')

@section('shop')

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
                                    <span><h5>Product Details:</h5></span> <span> <p class="about">des</p></span>

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
                                        <a href="{{ route('checkout', $product->id)}}"><button class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</button></a>
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
