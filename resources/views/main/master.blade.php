<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Furniture</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "{{asset('main/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <!-- custom css -->
    <link rel = "stylesheet" href = "{{asset('main/assets/css/main.css')}}">
</head>
<body  style="min-height: 100vh !important; display:block !important; flex-direction:column ">

    <!-- navbar -->
    @include('main.components.header')
    <!-- end of navbar -->

  <div style="min-height: 100vh">
    @yield('shop')
  </div>

    <!-- footer -->
    <div class="footer" style="margin-top: auto">
        @include('main.components.footer')
    </div>
    <!-- end of footer -->




    <!-- jquery -->
    <script src = "{{asset('main/assets/js/jquery-3.6.0.js')}}"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "{{asset('main/assets/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <!-- custom js -->
    <script src = "{{asset('main/assets/js/script.js')}}"></script>
</body>
</html>
