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
                  {{-- <button class="btn btn-danger text-uppercase mr-2 px-4" style="z-index: 1;">
                  Edit profile
                </button> --}}
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
              <div class="mb-5">
                <div class="details" style="display: flex;">
                    <div class="col">
                        <p class="lead fw-normal mb-1">Profile Details:</p>
                    </div>

                    <div class="col" style="padding-right: 2rem">
                         <span style="right: 0rem">
                            <a href="{{route('edit_profile')}}">
                                <button class="btn btn-danger text-uppercase mr-2 px-4 edit" style="z-index: 1;">
                                    <i class="fas fa-pen"></i> edit
                                </button>
                            </a>

                        </span>
                    </div>

                </div>



                <div class="p-4" style="background-color: #f8f9fa;">
                  <p class="font-italic mb-1">Name: {{$user->name}}</p>
                  <p class="font-italic mb-1">Email: {{$user->email}}</p>
                  <p class="font-italic mb-0">Phone: +233549694644 </p>
                </div>
              </div>

              <div class="mb-5">
                <div class="details" style="display: flex;">
                    <div class="col">
                        <p class="lead fw-normal mb-1">Password:</p>
                    </div>

                    <div class="col" style="padding-right: 2rem">
                         <span style="right: 0rem">
                            <a href="{{route('edit_password')}}">
                                <button class="btn btn-danger text-uppercase mr-2 px-4 edit" style="z-index: 1;">
                                    <i class="fas fa-pen"></i> reset
                                </button>
                            </a>

                        </span>
                    </div>

                </div>



                <div class="p-4" style="background-color: #f8f9fa;">
                  <h5 class="font-italic mb-1">Hello {{$user->name}},</h5>
                  <p>Are you scared that your password might have been compromized or you are
                    just bored with your old password?<br> click the reset button to change it now.
                  </p>

                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">Recent Orders</p>
                <h5 class="mb-0"><a href="{{route('orders')}}" class="text-muted">Show all >></a></h5>
              </div>



              <div class="row g-2">
                <div class="col">
                  <img src="{{asset('upload/products/237168031d88451c78fd8d6d6378c0b2.jpeg')}}"
                    alt="image 1" class="w-100 rounded-3">
                </div>
                <div class="col mb-2">
                  <img src="{{asset('upload/products/13403518ef9c1ce843a289d991f79bf5.jpg')}}"
                    alt="image 1" class="w-100 rounded-3">
                </div>
              </div>


              {{-- <div class="row g-2">
                <div class="col">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp"
                    alt="image 1" class="w-100 rounded-3">
                </div>
                <div class="col">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp"
                    alt="image 1" class="w-100 rounded-3">
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



