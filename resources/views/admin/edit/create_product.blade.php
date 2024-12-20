@extends('admin.master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">



                            <div class="container">
                                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                    <h4 class="card-title">Create Product</h4><br><br>
                                    @csrf

                                    <div class="row">
                                        <div class="col">
                                            <div class="row mbr-1">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-6">
                                                    <input name="name" class="form-control" type="text" value=""
                                                        id="example-text-input">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div class="col">

                                            <div class="row mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-6">
                                                    <select name="category" class="form-control" type="text" value="" id="example-text-input">
                                                        <option value="" style="text-align: center">--Select a category--</option>
                                                        @if ($category -> count())
                                                            @foreach ($category as $index => $category)
                                                            <option value="{{$category->id}}" style="text-align: center">{{$category->category_name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Price</label>
                                            <div class="col-sm-6">
                                                <input name="price" class="form-control" type="number"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-6">
                                                <input name="status" class="form-control" type="text" value=""
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>



                            <div class="container">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Product
                                        Description</label>
                                    <div class="col-sm-8">
                                        <textarea id="elm1" name="description" placeholder="Please enter a vivid description of the product"></textarea>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tags</label>
                                            <div class="col-sm-6">
                                                <input name="tags" class="form-control" type="text" value=""
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Estimated
                                                Delivery
                                                Time</label>
                                            <div class="col-sm-6">
                                                <input name="estimated_delivery_time" class="form-control" type="text"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Available
                                                Quantity</label>
                                            <div class="col-sm-6">
                                                <input name="available_quantity" class="form-control" type="text"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Colors</label>
                                            <div class="col-sm-6">
                                                <input name="colors" class="form-control" type="text" value=""
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Supplier's
                                                Name</label>
                                            <div class="col-sm-6">
                                                <input name="supplier_name" class="form-control" type="text"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Supplier's
                                                Contact</label>
                                            <div class="col-sm-6">
                                                <input name="supplier_contact" class="form-control" type="text"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Video Url /
                                                Link</label>
                                            <div class="col-sm-6">
                                                <input name="video_description" class="form-control" type="text"
                                                    value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Primarry
                                                Image</label>
                                            <div class="col-sm-6">
                                                <input name="primary_image" accept="image/*" class="form-control"
                                                    type="file" id="image">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"> Primary Image
                                                Preview</label>
                                            <div class="col-sm-6">
                                                <img id="showImage" class="" width="300px"
                                                    src="{{ !empty($Product->image) ? url('upload/products/' . $product->image) : url('upload/no_image.jpg') }}"
                                                    alt="Hero image">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Add Second Image
                                                </label>
                                            <div class="col-sm-6">
                                                <input name="image_1" accept="image/*" class="form-control"
                                                    type="file" id="image" multiple="">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Add Third Image
                                                </label>
                                            <div class="col-sm-6">
                                                <input name="image_2" accept="image/*" class="form-control"
                                                    type="file" id="image" multiple="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Create Product">
                                </form>
                            </div>

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
