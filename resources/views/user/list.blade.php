@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-color-header">
                <h3 class="card-title mt-1 bold">User List</h3>
                <a href="{{route('user.create')}}" class="btn btn-primary float-right">Create User</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Profile Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Age</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Status</th>
                            <!-- <th scope="col">Favorite Color</th> -->
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index=>$user)
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td class="text-center">
                                <img style="width: 40px; height: 40px; border-radius: 50%;"
                                    src="{{ $user->profile_picture ? asset($user->profile_picture) : asset('/assets/img/dphoto.png') }}"
                                    alt="Profile Photo">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->birthdate}}</td>
                            <td>{{$user->gender}}</td>
                            <td><span class="{{$user->status=='active'? 'badge badge-success': 'badge badge-danger'}}">{{$user->status}}</span></td>
                            <!-- <td class="text-center">
                                <span style="display: inline-block; width: 50px; height: 20px; background-color: {{ $user->favorite_color }};"></span>
                            </td> -->
                            

                            

                            

                            <td>
                                <div class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('user.profile', ['id'=> $user->id])}}" class="mr-1">
                                            <span class="badge badge-success">Detail</span>
                                        </a>|
                                        <a href="{{route('user.edit', ['id'=>$user->id])}}" class=" ml-1 mr-1">
                                            <span class="badge badge-primary">Edit</span>
                                        </a>|
                                        <a href="{{route('user.delete', ['id'=>$user->id])}}" class="ml-1">
                                            <span class="badge badge-danger">Delete</span>
                                        </a>

                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection