@extends('main.master')
@section('shop')

<section class="gradient-custom-2" >
    <div class="container py-4">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-12 col-xl-12" style="padding-top: 8rem !important;">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">

                  <a href="{{route('profile')}}" style="z-index: 1">
                    <button class="btn btn-danger text-uppercase mr-2 px-4" style="z-index: 1;">
                        <i class="fas fa-arrow-alt-circle-left"></i> profile
                      </button>
                  </a>
                  
              </div>
              <div class="ms-3" style="margin-top: 130px;">
                <h2>{{$user->name}}</h2>
              </div>
            </div>
            <div class="p-4 text-black " style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5">253</p>
                  <p class="small text-muted mb-0">Photos</p>
                </div>
                <div class="px-3">
                  <p class="mb-1 h5">1026</p>
                  <p class="small text-muted mb-0">Followers</p>
                </div>
                <div>
                  <p class="mb-1 h5">478</p>
                  <p class="small text-muted mb-0">Following</p>
                </div>
              </div>
            </div>
            <div class="card-body p-4 text-black">



              <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="lead fw-normal mb-0">All Orders</h6>

              </div>



              <div class="row g-2">
                <div class="col">
                  <div class="image">
                    <img src="{{asset('upload/products/237168031d88451c78fd8d6d6378c0b2.jpeg')}}"
                    alt="image 1" class="w-100 rounded-3">
                  </div>
                  <div class="info" style="background-color: #f8f9fa; padding: 3rem!important;">
                    <h6>Product Name: Outdoor/Garden Sofa</h6>
                    <p>Status: Pending shipmen</p>
                    <p>Estimated delivery time: 3 days</p>
                  </div>
                </div>
                <div class="col mb-2">
                  <div>
                    <img src="{{asset('upload/products/13403518ef9c1ce843a289d991f79bf5.jpg')}}"
                    alt="image 1" class="w-100 rounded-3">
                 </div>
                 <div class="info" style="background-color: #f8f9fa; padding: 3rem!important;">
                        <h6>Product Name: Outdoor/Garden Sofa</h6>
                        <p>Status: Pending shipmen</p>
                        <p>Estimated delivery time: 3 days</p>
                 </div>
                    </div>
                </div>
              </div>


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



