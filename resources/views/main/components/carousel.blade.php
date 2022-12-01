<!-- header -->
 {{-- <div class="carousel">
    <header id="header" class="carousel slide set-bg" data-bs-ride="carousel">
        <div class="container h-100 d-flex align-items-center carousel-inner">

            <div class="text-center carousel-item active vh-100 vw-100 expand-lg " style="position: relative; background-image: url('{{ asset('upload/hero/1747045814005431.jpg')}}')">
                 {{-- <img src="{{asset('main/img/logo/bgd.png')}}" style="position: relative" alt="">  --}}
                {{-- <h2 class="text-capitalize text-white">best collection</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                <a href="#" class="btn mt-3 text-uppercase">shop now</a>
            </div>
           @if ($heros -> count())
                @foreach ($heros as $hero)
                <div class="text-center carousel-item carousel vh-100 vw-100 " style="background-image: url('{{ asset('upload/hero/$hero->image')}}')">
                    {{-- <img src="{{asset($hero->image)}}" alt=""> --}}
                    {{-- <h2 class="text-capitalize text-white">best price & offer</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>

                    <a href="{{route('shop.index')}}" class="btn" >buy now</a>
                </div>
                @endforeach
           @endif




        <button class="carousel-control-prev" type="button" style="color: black;" data-bs-target="#header"
            data-bs-slide="prev">
            <div class="controls" style="display: block;">
                <div class="carousel-control-prev-icon" style="background-color: black;"></div>
                <div>previous</div>
            </div>
        </button>
        <button class="carousel-control-next" type="button" style="color: black;" data-bs-target="#header"
            data-bs-slide="next">
            <div class="controls" style="display: block;">
                <div class="carousel-control-next-icon" style="background-color: black;"></div>
                <div>next</div>
            </div>

        </button>
    </header>
</div> --}}
 <!-- end of header -->

<div class=" expand-lg carousel">
    <div class="container-fluid">
		<div class="row">


			<!-- slider banner	 -->

			<div id="carouselExampleIndicators" class="carousel slide"  style="background-image: url('{{ asset('main/img/hero/hero-1.jpg')}}')" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
			      		<h1>SLIDE ONE</h1>
			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			      	</div>
			    </div>



			    @if ($heros -> count())
                @foreach ($heros as $hero)
                <div class="text-center carousel-item carousel vh-100 vw-100 " style="background-image: url('{{ asset('upload/hero/$hero->image')}}')">
                     <div class="info">
						<h2 class="text-capitalize text-white">best price & offer</h2>
						<h1 class="text-uppercase py-2 fw-bold text-white">new season</h1>
						<a href="{{route('shop.index')}}" class="btn" >buy now</a>
					 </div>

                </div>
                @endforeach
           @endif

			    {{-- <div class="carousel-item">
			    	<div class="info">
			      		<h1>SLIDE THREE</h1>
			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			      	</div>
			    </div> --}}
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
		</div>
	</div>


</div>

<!-- jquery cdn -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>




<style>


    #carouselExampleIndicators{
	position: relative;
	height: 80vh;
	width: 100%;
}
#carouselExampleIndicators .carousel-inner{
	position: relative;
	height: 100%;
	width: 100%;
    color: #fff;
	/* background: #000; */
}
#carouselExampleIndicators .carousel-inner:before{
	position: absolute;
	content: '';
	/* background: rgba(0, 0, 0, 0.45); */
    color: #fff;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1;
}
#carouselExampleIndicators .carousel-inner .carousel-item{
	position: relative;
	height: 100%;
	width:100%;

	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(2){

	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(3){

	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}

#carouselExampleIndicators .carousel-inner .carousel-item .info{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	height: auto;
	width: 100%;
	z-index: 1;
	text-align: center;
}
#carouselExampleIndicators .carousel-inner .carousel-item h1{
	height: auto;
	color: #fff;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 5.5em;
	font-weight: 750;
}
#carouselExampleIndicators .carousel-inner .carousel-item p{
	height: auto;
	color: #ccc;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 1.2em;
	font-weight: 500;
}

</style>


