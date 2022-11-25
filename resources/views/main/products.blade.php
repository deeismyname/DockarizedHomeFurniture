@extends('main.master')

@section('shop')
@include('main.components.search')

    <section id="collection" class="py-5">
        <div class="container">
           
            <div class="row g-0" >

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
</style>
