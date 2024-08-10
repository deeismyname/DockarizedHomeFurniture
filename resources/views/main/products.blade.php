@extends('main.master')

@section('shop')
@include('main.components.search_for_product')

    <section id="collection" class="py-5">
        <div class="container">

            <div class="row g-0 product-btn">
                
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <a href="{{route('shop.index')}}">
                        <button type="button" class="btn m-2 text-dark {{ $default_category == 'All' ? 'active' : '' }}" data-filter="*">All</button>
                    </a>

                    @if ($categories->count())
                        @foreach ($categories as $index => $category)
                            <a href="{{route('shop.index', ['category' =>$category->category_name])}}">
                                <button type="submit" class="btn m-2 text-dark {{ $category->category_name == $default_category ? 'active' : '' }}" data-filter=".{{ $category->id }}">{{ $category->category_name }}</button>
                            </a>
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
        position: absolute;
    }
    .black{
        color: black!important;
    }
    .product-btn .btn.active{
        background-color: black!important;
        color: white!important;
    }
</style>
