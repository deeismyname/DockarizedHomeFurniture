@extends('main.master')
@section('shop')

    <!-- header -->
    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <img src="https://prod-cityfurniture.dotcmscloud.com/dA/da5ff64f-b3f3-49d3-ad9b-34b97c49bc9c" alt="">
                <h2 class="text-capitalize text-white">best collection</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                <a href="#" class="btn mt-3 text-uppercase">shop now</a>
            </div>
            <div class="text-center carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/zara-faux-shearling-chair-1654548559.jpeg?crop=1.00xw:0.668xh;0,0.258xh&resize=480:*"
                    alt="">
                <h2 class="text-capitalize text-white">best price & offer</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>
                <a href="#" class="btn  text-uppercase">buy now</a>
            </div>

            <div class="text-center carousel-item">
                <img src="https://www.induscraft.com/cache/data/16/PRD28040PRD28040img2331-800x800.jpg" alt="">
                <h2 class="text-capitalize text-white">best price & offer</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>
                <a href="#" class="btn btn-outline-dark">buy now</a>
            </div>
        </div>
        </div>

        <button class="carousel-control-prev" type="button" style="color: black;" data-bs-target="#header"
            data-bs-slide="prev">
            <div class="controls" style="display: block;">
                <div class="carousel-control-prev-icon" style="background-color: black;"></div>
                <div>previous</div>
            </div>
        </button>
        <button class="carousel-control-next" type="button" style="color: black;" data-bs-target="#header"
            data-bs-slide="next">
            <div class="controls" style="display: block;">
                <div class="carousel-control-next-icon" style="background-color: black;"></div>
                <div>next</div>
            </div>

        </button>
    </header>
    <!-- end of header -->

    <!-- collection -->

    <!-- end of collection -->

    <!-- special products -->
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Special Selection</h2>
            </div>


            <div class="special-list row g-0">
                @if ($product->count())
                    @foreach ($product as $index => $product)
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
    <!-- end of blogs -->

    <!-- blogs -->
    <section id="blogs" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Our Latest Blog</h2>
            </div>

            <div class="row g-3">
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_1.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        <a href="#" class="btn blog_btn">Read More</a>
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_2.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        <a href="#" class="btn blog_btn">Read More</a>
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <img src="images/blog_3.jpg" alt="">
                    <div class="card-body px-0">
                        <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                        <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet aspernatur repudiandae nostrum dolorem molestias odio. Sit fugit adipisci omnis quia
                            itaque ratione iusto sapiente reiciendis, numquam officiis aliquid ipsam fuga.</p>
                        <p class="card-text">
                            <small class="text-muted">
                                <span class="fw-bold">Author: </span>John Doe
                            </small>
                        </p>
                        <a href="#" class="btn blog_btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

    <!-- about us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-5">
                        <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga blanditiis, modi
                        exercitationem quae quam eveniet! Minus labore voluptatibus corporis recusandae accusantium velit,
                        nemo, nobis, nulla ullam pariatur totam quos.</p>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="images/about_us.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- popular -->
    <section id="popular" class="py-5">
        <div class="container">
            <div class="title text-center pt-3 pb-5">
                <h2 class="position-relative d-inline-block ms-4">Popular Of This Year</h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 row g-3">
                    <h3 class="fs-5">Top Rated</h3>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/top_rated_1.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/top_rated_2.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/top_rated_3.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 row g-3">
                    <h3 class="fs-5">Best Selling</h3>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/best_selling_1.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/best_selling_2.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/best_selling_3.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 row g-3">
                    <h3 class="fs-5">On Sale</h3>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/on_sale_1.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/on_sale_2.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <img src="images/on_sale_3.jpg" alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Blue Shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- newsletter -->
    <section id="newsletter" class="py-5">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="title text-center pt-3 pb-5">
                    <h2 class="position-relative d-inline-block ms-4">Newsletter Subscription</h2>
                </div>

                <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus rem
                    officia accusantium maiores quisquam dolorum?</p>
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Enter Your Email ...">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->


@endsection

