@extends('main.master')

@section('shop')

<section class="gradient-custom-2">
    <div class="container py-4">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12" style="padding-top: 8rem;">
                <div class="card">
                    @include('main.components.profile_section')

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="preview-pic tab-content">
                                    <div class="text-center p-4">
                                        <img id="main-image" src="{{ asset($order->productOrdered->primary_image) }}" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3" style="font-size: 1rem; padding-top: 2rem;">
                                <h3 class="product-title">{{ $order->productOrdered->name }}</h3>
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
                                <h4 class="price">Price: Gh₵<span>{{ $order->productOrdered->price }}</span></h4>
                                <div class="description">
                                    <p>{{ $order->productOrdered->description }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs for Description and Comments -->
                        {{-- <div class="row mt-4" style="margin-left: 1rem; margin-right: 1rem;">
                            <ul class="nav nav-tabs" id="productTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="comments-tab" data-toggle="tab" role="tab">Comments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="message-tab" data-toggle="tab" role="tab">Message</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content p-4">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <h3>Product Description</h3>
                                <p>{!! $order->productOrdered->description !!}</p>
                            </div>
                            <div class="tab-pane fade" id="comments" role="tabpanel">
                                <h3>Product Comments</h3>
                                @if($order->productOrdered->comments && count($order->productOrdered->comments) > 0)
                                    <ul>
                                        @foreach($order->productOrdered->comments as $comment)
                                            <li>{{ $comment->content }} - <strong>{{ $comment->author }}</strong></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No comments available for this product.</p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="message" role="tabpanel">
                                <h3>Make Enquiries</h3>
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Enter your email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group" style="padding-bottom: 1rem;">
                                        <label for="message">Leave your message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div> --}}

                        <div class="wrapper row mt-4" style="margin-left: 1rem !important; margin-right: 1rem !important">
                            <ul class="nav nav-tabs" id="productTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link tab-link active" id="description-tab" data-toggle="tab" href="#description" role="tab">Ratting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab">Comment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link" id="message-tab" data-toggle="tab" href="#message" role="tab">Message</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content p-4">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <h3>Product Ratting</h3>
                                <form action="{{route('rate_product')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="rating" class="form-label">Rate this product on a scale of 1 - 5</label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" step="0.5" required>
                                        <input type="hidden" name="order_id" value={{$order->id}}>
                                        <input type="hidden" name="product_id" value={{ $order->productOrdered->id }}>
                                        <small class="form-text text-muted">Please enter a number between 1 and 5 with up to one decimal place.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Rate</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="comments" role="tabpanel">
                                <h3>Comment</h3>
                                <form action="{{route('comment')}}" method="POST">
                                    @csrf
                                    <div class="form-group" style="padding-bottom: 1rem">
                                        <label for="message">Leave your comment</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="4" required placeholder="your previous comment: {{ $order->comment ?? 'No comment from you yet. Tap to edit ' }}"></textarea>
                                        <input type="hidden" name="order_id" value={{$order->id}}>
                                        <input type="hidden" name="product_id" value={{ $order->productOrdered->id }}>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="message" role="tabpanel">
                                <h3>Leave a message</h3>
                                <form action="">
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
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    section {
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    @media (max-width: 992px) {
        .img-fluid {
            max-width: 100%;
        }
    }
    @media (max-width: 576px) {
        .info {
            padding: 1rem;
        }
    }
</style>
@endpush

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
