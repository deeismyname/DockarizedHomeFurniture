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
                    </div>
                  </div>
                @endforeach
              </div>

{{--
              -- <div class="row g-2">
                <div class="col">
                  <div>
                    <img src="{{asset('upload/products/7e8750d4a701596732953c160d2ae096.jpg')}}"
                    alt="image 1" class="w-100 rounded-3">
                  </div>

                    <div class="info" style="background-color: #f8f9fa; padding: 3rem!important;">
                        <h6>Product Name: Outdoor/Garden Sofa</h6>
                        <p>Status: Pending shipmen</p>
                        <p>Estimated delivery time: 3 days</p>
                    </div>

                </div>
                <div class="col">
                  <div>
                    <img src="{{asset('upload/products/6449f44a102fde848669bdd9eb6b76fa.jpeg')}}"
                    alt="image 1" class="w-100 rounded-3">
                  </div>

                    <div class="info" style="background-color: #f8f9fa; padding: 3rem!important;">
                        <h6>Product Name: Outdoor/Garden Sofa</h6>
                        <p>Status: Pending shipmen</p>
                        <p>Estimated delivery time: 3 days</p>
                    </div>
                </div>
              </div> --}}
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



