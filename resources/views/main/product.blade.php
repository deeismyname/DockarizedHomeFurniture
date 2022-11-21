@extends('main.master')

@section('shop')



    <section>
        {{-- <div class="container mt-5 mb-12">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                             src="{{ asset($product->primary_image) }}" style="width: 80%" /> </div>
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

                                    <div class="mt-4 mb-3 ">

                                       <h3 class="text-to-upper">{{ $product->name }}</h3>

                                       <span class="act-price">Gh₵
                                                {{ $product->price }}.00</span>

                                    </div>
                                    <div class="cart mt-4 align-items-center">
                                        <a href="{{ route('checkout', $product->id)}}"><button class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</button></a>
                                        <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button>
                                    </div>
                                    <span><h5>Product Details:</h5></span> <span> <p class="about">des</p></span>


                                    <div class="cart mt-4 align-items-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__breadcrumb">
                    <a href="./index.html">Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Product Details</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-9">

                            <div class="preview-pic tab-content">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                             src="{{ asset($product->primary_image) }}" style="width: 100%" /> </div>
                                </div>
                            </div>
                            <div class=" thumbnail text-center">
                              <img onclick="change_image(this)" src="{{ asset($product->primary_image) }}"
                              width="80">
                          <img onclick="change_image(this)" src="{{ asset($product->image_1) }}"
                              width="80">
                          <img onclick="change_image(this)" src="{{ asset($product->image_2) }}"
                              width="80">
                          <img onclick="change_image(this)" src="{{ asset($product->video_description) }}"
                              width="80" height="40" style="height: 100% !important;">
                            </div>

                        </div>
                        <div class="details col-lg-3" style="font-size: 1rem">
                            <h3 class="product-title">{{$product->name}}</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>
                           <div> <p class="product-description">{{$product->description}}</p></div>
                            <h4 class="price">price: Gh₵<span>{{$product->price}}</span></h4>
                            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                            <h5 class="sizes">sizes:
                                <span class="size" data-toggle="tooltip" title="small">s</span>
                                <span class="size" data-toggle="tooltip" title="medium">m</span>
                                <span class="size" data-toggle="tooltip" title="large">l</span>
                                <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                            </h5>
                            <h5 class="colors">colors:
                                <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                                <span class="color green"></span>
                                <span class="color blue"></span>
                            </h5>
                            <div class="action">
                                <a href="{{ route('checkout', $product->id)}}"><button class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</button></a>
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 5rem;
  background: #eee;
  /* padding: 3em; */
  line-height: 1.5em; }

  @media screen and (max-width: 1020px) {
    .thumbnail img{
        width: 5rem !important;

    }
    .details{
        font-size: 1rem !important;
    }
    .details h3{
        font-size: 1rem !important;
    }
    .details h4{
        font-size: 1rem !important;
    }
    .details h5{
        font-size: 1rem !important;
    }
    .p-4 img{
        padding: 0;
        margin: 0;
    }
  }

  @media screen and (max-width: 1280px) {
    .thumbnail img{
        width: 5rem !important;

    }
    .details{
        font-size: 1rem !important;
    }
    .details h3{
        font-size: 1rem !important;
    }
    .details h4{
        font-size: 1rem !important;
    }
    .details h5{
        font-size: 1rem !important;
    }
    .p-4 img{
        padding: 0;
        margin: 0;
    }
  }


@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }



/*# sourceMappingURL=style.css.map */
</style>

<link rel="stylesheet" href="{{ asset('main/assets/product.css') }}">


<script>
    function change_image(image) {

        var container = document.getElementById("main-image");

        container.src = image.src;
    }

    document.addEventListener("DOMContentLoaded", function(event) {

    });
</script>
