@extends('main.master')

@section('shop')
@include('main.components.search_for_product')

    <section id="collection" class="py-5">
        <div class="container">
            

            <div class="row g-0 product-btn">

                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <a href="{{route('shop.index')}}"><button type="button" class="btn m-2 text-dark" data-filter="*">All</button></a>


                        @if ($categories->count())
                            @foreach ($categories as $index => $category)
                               <a href="{{route('shop.index', ['category' =>$category->category_name])}}">
                                    <button type="submit" class="btn m-2 text-dark"
                                    data-filter=".{{ $category->id }}">{{ $category->category_name }}</button>
                                </a>


                                {{-- <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                                <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                                <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                                <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button> --}}
                            @endforeach
                        @endif

                </div>

                @include('main.components.product_paginate')

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
    .product-btn:active{
        background-color: black!important;
        color: white!important;
    }
</style>
