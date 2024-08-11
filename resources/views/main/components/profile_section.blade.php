<div class="profile_section">
    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
            alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
            style="width: 150px; z-index: 1">


            {{-- {{$page_name}} --}}
            @if(!isset($page_name) || $page_name != "profile")
                <a href="{{ route('profile') }}" style="z-index: 1">
                    <button class="btn btn-danger text-uppercase mr-2 px-4" style="z-index: 1;">
                        <i class="fas fa-arrow-alt-circle-left"></i> profile
                    </button>
                </a>
            @endif


        </div>
        <div class="ms-3" style="margin-top: 130px;">
          <h2>{{$user->name}}</h2>

        </div>

      </div>
      <div class="p-4 text-black " style="background-color: #f8f9fa;">
          <div class="d-flex justify-content-end text-center py-1">
              <div>
                <p class="mb-1 h5">{{$total_orders}}</p>
                <p class="small text-muted mb-0">Orders</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">{{$total_orders_incart}}</p>
                <p class="small text-muted mb-0">In Cart</p>
              </div>
              <div>
                <p class="mb-1 h5">{{$total_orders_completed}}</p>
                <p class="small text-muted mb-0">Completed</p>
              </div>
            </div>
      </div>
</div>
