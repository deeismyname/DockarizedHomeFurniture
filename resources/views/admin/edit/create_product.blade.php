@extends('admin.master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Create Product</h4>

                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input name="catchy_title" class="form-control" type="number" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Product Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="long_description" placeholder="Please enter a vivid description of the product">

      </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input name="status" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tags</label>
                                    <div class="col-sm-10">
                                        <input name="tags" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Estimated Delivery
                                        Time</label>
                                    <div class="col-sm-10">
                                        <input name="estimated_delivery_time" class="form-control" type="text"
                                            value="" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Available
                                        Quantity</label>
                                    <div class="col-sm-10">
                                        <input name="available_quantity" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Colors</label>
                                    <div class="col-sm-10">
                                        <input name="colors" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier's Name</label>
                                    <div class="col-sm-10">
                                        <input name="supplier_name" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier's
                                        Contact</label>
                                    <div class="col-sm-10">
                                        <input name="supplier_contact" class="form-control" type="text"
                                            value="" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video Url / Link</label>
                                    <div class="col-sm-10">
                                        <input name="video_description" class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Primarry Image</label>
                                    <div class="col-sm-10">
                                        <input name="primary_image" accept="image/*" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Primary Image
                                        Preview</label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="" width="300px"
                                            src="{{ !empty($Product->image) ? url('upload/products/' . $product->image) : url('upload/no_image.jpg') }}"
                                            alt="Hero image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Add Other Images</label>
                                    <div class="col-sm-10">
                               <input name="multi_image[]" accept="image/*" class="form-control" type="file" id="image" multiple="" >
                                    </div>
                                </div>
                                <!-- end row -->



                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Create Product">
                            </form>

                            {{-- <a href="{{route('admin.profile')}}"><input  class="btn btn-danger waves-effect waves-light" value="Cancel" ></a> --}}


                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
