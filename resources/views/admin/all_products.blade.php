@extends('admin.master')
@section('admin')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="top_info"
                                style="display: flex; justify-content:space-around; padding-bottom: 0.5rem; ">
                                <h4>All Products</h4>
                               <a href="{{route('products.create')}}"> <div class="btn btn-success" class="padding: 1rem;">+ Add Product</div></a>
                            </div>

                            {{-- table of all products --}}
                            <table class="table table-striped table-hover">

                                <thead style="background-color: rgb(37, 43, 59); color:aliceblue; font-size:1rem;">

                                    <tr  style="text-align: center">
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Actions</th>
                                    </tr>

                                </thead>

                                <tbody style="background-color:rgb(37, 43, 59, 0.1); font-size:0.8rem; ">

                                    @if ($product->count())
                                        @foreach ($product as $index => $product)
                                            <tr  style="text-align: center; allign-items: center;">
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>Gh₵ {{ $product->price }}.00</td>
                                                <td>{{ $product->categories->category_name}}</td>
                                                <td>{{ $product->status }}</td>
                                                <td>{{ $product->available_quantity }} Units</td>
                                                {{-- <td>
                @foreach ($menu->description as $description)
                {{-- {{$description}} --}}
                                                {{-- <p>1</p>
                @endforeach
            </td> --}}
                                                <td style="display:flex; a ">

                                                    <div style="display: flex">
                                                        <a href="{{ route('products.show', $product->id) }}" title="Show"><div class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i> show</div></a><span> . </span>
                                                        <a href="{{ route('products.edit', $product) }}" title="Edit"><div class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i> edit</div></a>.
                                                        {{-- @include('menu.order_menu') --}}
                                                        <form method="post" action="{{route('products.destroy',$product->id)}}">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            {{-- end of products table --}}

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>

@endsection
