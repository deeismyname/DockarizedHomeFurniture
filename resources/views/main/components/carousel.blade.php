<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('upload/hero/1751036636853791.jpg')}}" alt="First slide">
        <div class="info">
            <h2 class="text-capitalize text-white inside" style="color: #fff !important;">best price & offer</h2>
            <h1 class="text-uppercase py-2 fw-bold text-white inside" style="color: #fff !important">new season</h1>
            <a href="{{route('shop.index')}}" class="btn inside" >buy now</a>
         </div>
      </div>



      @if ($heros -> count())
      @foreach ($heros as $hero)
      <div class="carousel-item ">
        <img class="d-block w-100" src="{{asset($hero->image)}}" alt="">
        <div class="info">
            <h2 class="text-capitalize text-white inside" style="color: #fff !important">best price & offer</h2>
            <h1 class="text-uppercase py-2 fw-bold text-white inside" style="color: #fff !important">new season</h1>
            <a href="{{route('shop.index')}}" class="btn inside" >buy now</a>
         </div>
      </div>
      @endforeach
 @endif

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- jquery cdn -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <style>
    .carousel-inner{
        /* min-height: 80vh; */
        min-width: 100vw;
    }
    .info{ position: absolute !important;
	        top: 50% !important;
             top: 50% !important;
	        transform: translateY(-50%) !important;
	        height: auto !important;
	        width: 100% !important;
	        z-index: 1;
	        text-align: center !important;
            color: #fff !important;
            font-size: 1rem !important;
    }
    .inside{
        text-shadow: 2px 4px 17px rgba(112,112,112,0.64);
color: #FFFFFF;

    }
  </style>


