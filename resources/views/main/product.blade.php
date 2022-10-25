@extends('main.master')

@section('shop')


      <!-- Start Product Details Section -->
      <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="{{$product->primary_image}}" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="{{$product->primary_image}}" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="{{$product->image_2}}" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Large Image -->
                        <!-- Start Thumbnail Image -->
                        <div
                            class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                            <div class="swiper-wrapper">
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="{{$product->primary_image}}"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="{{$product->primary_image}}"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="assets/images/product/default/home-1/default-3.jpg"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="assets/images/product/default/home-1/default-4.jpg"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="assets/images/product/default/home-1/default-5.jpg"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="assets/images/product/default/home-1/default-6.jpg"
                                        alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="gallery-thumb-arrow swiper-button-next"></div>
                            <div class="gallery-thumb-arrow swiper-button-prev"></div>
                        </div>
                        <!-- End Thumbnail Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title">{{$product->name}}</h4>
                            <div class="d-flex align-items-center">
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="empty"><i class="ion-android-star"></i></li>
                                </ul>
                                <a href="#" class="customer-review ml-2">(customer review )</a>
                            </div>
                            <div class="price">GH₵ {{$product->price}}.00</div>
                            <p>{{$product->description}}</p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Available Options</h4>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <span>Color</span>
                                <div class="product-variable-color">
                                    <label for="product-color-red">
                                        <input name="product-color" id="product-color-red" class="color-select"
                                            type="radio" checked>
                                        <span class="product-color-red"></span>
                                    </label>
                                    <label for="product-color-tomato">
                                        <input name="product-color" id="product-color-tomato" class="color-select"
                                            type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>
                                    <label for="product-color-green">
                                        <input name="product-color" id="product-color-green" class="color-select"
                                            type="radio">
                                        <span class="product-color-green"></span>
                                    </label>
                                    <label for="product-color-light-green">
                                        <input name="product-color" id="product-color-light-green" class="color-select"
                                            type="radio">
                                        <span class="product-color-light-green"></span>
                                    </label>
                                    <label for="product-color-blue">
                                        <input name="product-color" id="product-color-blue" class="color-select"
                                            type="radio">
                                        <span class="product-color-blue"></span>
                                    </label>
                                    <label for="product-color-light-blue">
                                        <input name="product-color" id="product-color-light-blue" class="color-select"
                                            type="radio">
                                        <span class="product-color-light-blue"></span>
                                    </label>
                                </div>
                            </div>

                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <span>Size</span>
                                <select class="product-variable-size">
                                    <option selected value="1"> size in option</option>
                                    <option value="2">s</option>
                                    <option value="3">m</option>
                                    <option value="4">l</option>
                                    <option value="5">xl</option>
                                    <option value="6">xxl</option>
                                </select>
                            </div>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <span>Group Products</span>
                                <div class="product-variable-group table-responsive ">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="tr-vertical-middle">
                                                <td>
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="product-details-default.html" class="link--gray">Kaoreet
                                                        lobortis sagit</a>
                                                </td>
                                                <td>
                                                    <div class="product-price">
                                                        <span class="product-price-reg">$31.69</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-stock">
                                                        <span class="product-stock-in"><i
                                                                class="fa fa-check-circle"></i> </span>9 IN STOCK
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="tr-vertical-middle">
                                                <td>
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="product-details-default.html" class="link--gray">Kaoreet
                                                        lobortis sagit</a>
                                                </td>
                                                <td>
                                                    <div class="product-price">
                                                        <span class="product-price-reg">$31.69</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-stock">
                                                        <span class="product-stock-in"><i
                                                                class="fa fa-check-circle"></i> </span> 9 IN STOCK
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="tr-vertical-middle">
                                                <td>
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="product-details-default.html" class="link--gray">Kaoreet
                                                        lobortis sagit</a>
                                                </td>
                                                <td>
                                                    <div class="product-price">
                                                        <span class="product-price-reg">{{$product->price}}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-stock">
                                                        <span class="product-stock-in"><i
                                                                class="fa fa-check-circle"></i> </span> 9 IN STOCK
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Add to
                                    wishlist</a>
                                <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i>Compare</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        <div class="product-details-catagory mb-2">
                            <span class="title">CATEGORIES:</span>
                            <ul>
                                <li><a href="#">BAR STOOL</a></li>
                                <li><a href="#">KITCHEN UTENSILS</a></li>
                                <li><a href="#">TENNIS</a></li>
                            </ul>
                        </div> <!-- End  Product Details Catagories Area-->


                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <span class="title">SHARE THIS PRODUCT:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                    Description
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                    Specification
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    Reviews (1)
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane active show" id="description">
                                    <div class="single-tab-content-item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla. </p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem,
                                            quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies
                                            massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                            hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus
                                            nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus,
                                            consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in
                                            imperdiet ligula euismod eget</p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->



@endsection


<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
