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
                                <h4>All Hero Slider</h4>
                               <a href="{{route('set_page.create')}}"> <div class="btn btn-success" class="padding: 1rem;">+ Add Product</div></a>
                            </div>

                            {{-- table of all products --}}
                            <table class="table table-striped table-hover">

                                <thead style="background-color: rgb(37, 43, 59); color:aliceblue; font-size:1rem;">

                                    <tr  style="text-align: center">
                                        <th scope="col">Id</th>
                                        <th scope="col">Bold Short Text</th>
                                        <th scope="col">Catchy Title </th>
                                        <th scope="col">Category</th>
                                    </tr>

                                </thead>

                                <tbody style="background-color:rgb(37, 43, 59, 0.1); font-size:0.8rem; ">

                                    @if ($hero->count())
                                        @foreach ($hero as $index => $hero)
                                            <tr  style="text-align: center; allign-items: center;">
                                                <td>{{ $hero->id }}</td>
                                                <td>{{ $hero->bold_short_Image_detail}}</td>
                                                <td>{{ $hero->catchy_title }}</td>
                                                <td>{{ $hero->categories_id}}</td>

                                                {{-- <td>
                @foreach ($menu->description as $description)
                {{-- {{$description}} --}}
                                                {{-- <p>1</p>
                @endforeach
            </td> --}}
                                                <td style="display:flex; a ">

                                                    <div style="display: flex">
                                                        <a href="{{ route('set_page.show', $hero->id) }}" title="Show"><div class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i> show</div></a><span> . </span>
                                                        <a href="{{ route('set_page.edit', $hero) }}" title="Edit"><div class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i> edit</div></a>.
                                                        {{-- @include('menu.order_menu') --}}
                                                        <form method="post" action="{{route('set_page.destroy', $hero->id)}}">
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
