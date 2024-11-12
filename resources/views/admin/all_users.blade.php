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
                                <h4>All users</h4>
                               <a href="{{route('user_management.create')}}"> <div class="btn btn-success" class="padding: 1rem;">+ Add user</div></a>
                            </div>

                            {{-- table of all users --}}
                            <table class="table table-striped table-hover">

                                <thead style="background-color: rgb(37, 43, 59); color:aliceblue; font-size:1rem;">

                                    <tr  style="text-align: center">
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Actions</th>
                                    </tr>

                                </thead>

                                <tbody style="background-color:rgb(37, 43, 59, 0.1); font-size:0.8rem; ">

                                    @if ($users->count())
                                        @foreach ($users as $index => $user)
                                            <tr  style="text-align: center; allign-items: center;">
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone}}</td>
                                                <td>somwhere on mass</td>
                                                <td style="display:flex; a ">

                                                    <div style="display: flex">
                                                        <a href="{{ route('user_management.show', $user->id) }}" title="Show"><div class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i> show</div></a><span> . </span>
                                                        <a href="{{ route('user_management.edit', $user) }}" title="Edit"><div class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i> edit</div></a>.
                                                        {{-- @include('menu.order_menu') --}}
                                                        <form method="post" action="{{route('user_management.destroy',$user->id)}}">
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

                            {{-- end of users table --}}

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>

@endsection
