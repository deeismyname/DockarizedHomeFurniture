@extends('main.master')
@section('shop')

<section class="gradient-custom-2" >
    <div class="container py-4">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-12 col-xl-12" style="padding-top: 8rem !important;">
          <div class="card">

            @include('main.components.profile_section')

            <div class="card-body p-4 text-black">

              <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="lead fw-normal mb-0">All Orders</h6>

              </div>



              <div class="row g-2">
                @foreach ($orders as $order)
                <div class="col-sm-4">
                    <div class="image">
                      <img src="{{asset($order->productOrdered->primary_image)}}"
                      alt="image 1" class="w-100 rounded-3">
                    </div>
                    <div class="info" style="background-color: #f8f9fa; padding: 3rem!important;">
                      <h6>Product Name: {{$order->productOrdered->name}}</h6>
                      <p>Status: {{$order->status}}</p>
                      <p>Estimated delivery time: {{$order->productOrdered->estimated_delivery_time}}</p>
                      <form action="{{route('order')}}">
                          <div class="justify-content-between">
                              <input type="hidden" name="id" value={{$order->id}}>
                              <button type="submit" class="btn btn-success px-3 pay">More</button>

                          </div>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- end of newsletter -->


@endsection


<style>
    section{
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .edit{
        float: right;
        right: 0 !important;
    }

    button:hover{
        color: white !important;
    }
</style>



