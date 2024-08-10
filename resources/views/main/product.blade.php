@extends('main.master')

@section('shop')
    @include('main.components.search_for_product')


    <section>
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row" >
                        <div class="preview col-md-9">

                            <div class="preview-pic tab-content">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                            src="{{ asset($product->primary_image) }}" style="width: 80%" /> </div>
                                </div>
                            </div>
                            <div class=" thumbnail text-center">
                                <img onclick="change_image(this)" src="{{ asset($product->primary_image) }}" width="80">
                                <img onclick="change_image(this)" src="{{ asset($product->image_1) }}" width="80">
                                <img onclick="change_image(this)" src="{{ asset($product->image_2) }}" width="80">
                                <img onclick="change_image(this)" src="{{ asset($product->video_description) }}"
                                    width="80" height="40" style="height: 100% !important;">
                            </div>

                        </div>
                        <div class="details col-lg-3" style="font-size: 1rem">
                            <h3 class="product-title">{{ $product->name }}</h3>
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

                            <h4 class="price">price: Gh₵<span>{{ $product->price }}</span></h4>
                            {{-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87
                                    votes)</strong></p> --}}

                            <h5 class="colors">colors:
                                <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                                <span class="color green"></span>
                                <span class="color blue"></span>
                            </h5>
                            <div class="action">
                                <a href="{{ route('checkout', $product->id) }}"><button
                                        class="btn btn-danger text-uppercase mr-2 px-4">Buy Now</button></a>
                                <button class="like btn btn-default" type="button"><span
                                        class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs for Description and Comments -->
                    <div class="wrapper row mt-4">
                        <ul class="nav nav-tabs" id="productTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tab-link active" id="description-tab" data-toggle="tab" href="#description" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-link" id="message-tab" data-toggle="tab" href="#message" role="tab">Message</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content p-4">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h3>Product Description</h3>
                            <p class="product-description">{!! $product->description !!}</p>
                        </div>
                        <div class="tab-pane fade" id="comments" role="tabpanel">
                            <h3>Product Comments</h3>
                            @if($product->comments && count($product->comments) > 0)
                                <ul>
                                    @foreach($product->comments as $comment)
                                        <li>{{ $comment->content }} - <strong>{{ $comment->author }}</strong></li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No comments available for this product.</p>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="message" role="tabpanel">
                            <h3>Make Enquiries</h3>
                            <form action="">
                                <div class="form-group">
                                    <label for="email">Enter your email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group" style="padding-bottom: 1rem">
                                    <label for="message">Leave your message</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
        overflow-x: hidden;
    }

    img {
        max-width: 100%;
    }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        /* margin-top: 3rem; */
        background: #eee;
        /* padding: 3em; */
        line-height: 1.5em;
    }

    /* .row{
        max-height: 40vh;
    } */

    @media screen and (max-width: 1020px) {
        .thumbnail img {
            width: 5rem !important;

        }

        .details {
            font-size: 1rem !important;
        }

        .details h3 {
            font-size: 1rem !important;
        }

        .details h4 {
            font-size: 1rem !important;
        }

        .details h5 {
            font-size: 1rem !important;
        }

        .p-4 img {
            padding: 0;
            margin: 0;
        }
    }

    @media screen and (max-width: 1280px) {
        .thumbnail img {
            width: 5rem !important;

        }

        .details {
            font-size: 1rem !important;
        }

        .details h3 {
            font-size: 1rem !important;
        }

        .details h4 {
            font-size: 1rem !important;
        }

        .details h5 {
            font-size: 1rem !important;
        }

        .p-4 img {
            padding: 0;
            margin: 0;
        }
    }


    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #b36800;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .orange {
        background: #ff9f1a;
    }

    .green {
        background: #85ad00;
    }

    .blue {
        background: #0076ad;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }



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

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var tabs = document.querySelectorAll('.tab-link');
    var tabContents = document.querySelectorAll('.tab-pane');

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            tabs.forEach(function(t) {
                t.classList.remove('active');
            });
            tabContents.forEach(function(content) {
                content.classList.remove('show', 'active');
            });

            tab.classList.add('active');
            var contentId = tab.getAttribute('href').substring(1);
            document.getElementById(contentId).classList.add('show', 'active');
        });
    });
});

</script>
