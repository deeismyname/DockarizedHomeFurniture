@extends('main.master')

@section('shop')

@include('main.components.search')

    <section id="collection" class="py-5">
        <div class="container">
            <div class="row g-0">

                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <a href="{{route('shop.index')}}"><button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button></a>


                        @if ($categories->count())
                            @foreach ($categories as $index => $category)
                                <a href="{{route('shop.index',['category' =>$category->category_name])}}"><button type="button" class="btn m-2 text-dark"
                                    data-filter=".{{ $category->category_name }}">{{ $category->category_name }}</button>
                                </a>
                            @endforeach
                        @endif

                </div>

                <div class="row g-3">
                    @if ($search_data->count())
                        @foreach ($search_data as $index => $product)
                            <div
                                class="card border-0 col-md-6 col-lg-4 bg-transparent my-3 position-relative">
                                <img src="{{ asset($product->primary_image) }}" alt="">
                                <div><a href="{{ route('shop.show', $product) }}"> <span style="absolute!important"
                                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center more">more</span></a>
                                </div>
                                <div class="text-center">
                                    <div class="rating mt-3">
                                        <span class="text-primary"><i class="fas fa-star"></i></span>
                                        <span class="text-primary"><i class="fas fa-star"></i></span>
                                        <span class="text-primary"><i class="fas fa-star"></i></span>
                                        <span class="text-primary"><i class="fas fa-star"></i></span>
                                        <span class="text-primary"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h6 class="text-capitalize my-1">{{ $product->name }}</h6>
                                    </p>
                                    <span class="fw-bold">Gh₵ {{ $product->price }}.00</span>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="black" >
                            {{$search_data->links()}}

                          </div> --}}
                    @endif
                </div>




            </div>


    </section>
@endsection


<style>
    .card {
        position: relative;
    }

    .more {
        top: 1rem;
        right: 1rem;
        height: 3rem;
        width: 3rem;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        possition: absolute;
    }
    .black{
        color: black!important;
    }
</style>
