@extends('admin.master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Profile Page </h4>

            <form method="POST" action="{{route('set_page.update', ['set_page' => $hero->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                {{-- {{route('set_page.update')}} --}}

                <input type="hidden" name="id" value="{{$hero->id}}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Catchy title</label>
                <div class="col-sm-10">
                    <input name="catchy_title" class="form-control" type="text" value="{{$hero->catchy_title}}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Bold short Image detail</label>
                <div class="col-sm-10">
                    <input name="bold_short_Image_detail" class="form-control" type="text" value="{{$hero->bold_short_Image_detail}}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Welcome Image </label>
                <div class="col-sm-10">
                <input name="image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label"> Image Preview</label>
                <div class="col-sm-10">
                    <img id="showImage" class="" width="500px" src="{{ (!empty($hero->image))? url('upload/hero/'.$hero->image):url('upload/no_image.jpg') }}" alt="Hero image">
                </div>
            </div>
            <!-- end row -->
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
            </form>

            {{-- <a href="{{route('admin.profile')}}"><input  class="btn btn-danger waves-effect waves-light" value="Cancel" ></a> --}}


        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
