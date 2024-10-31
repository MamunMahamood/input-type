@extends('layouts.master')
@section('content')

@section('style')

@endsection


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-color-header">
                <h3 class="card-title mt-1 bold">User Profile</h3>
                <a href="{{route('user.list')}}" class="btn btn-primary float-right">Back to List</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{$user->profile_picture ? $user->profile_picture : asset('assets/img/dphoto.png')}}" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Profile Picture" style="width: 150px; height: 150px;">
                            <div class="card-body center">
                                <h3 class="card-title">{{$user->name}}</h3>
                                <p class="card-text">{{$user->username}}</p>
                            </div>
                        </div>
                        <div class="card row center">

                            <a href="{{route('user.edit', ['id'=>$user->id])}}" class="btn btn-primary col-5 mt-4 mb-4">
                                Edit
                            </a>
                            <a href="{{route('user.delete', ['id'=>$user->id])}}" class="btn btn-danger col-5 mb-4">
                                Delete
                            </a>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-color-header">
                                <h5>Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <strong>Full Name:</strong> {{$user->name}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Username:</strong> {{$user->username}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Email:</strong> {{$user->email}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Phone:</strong> {{$user->phone}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Website:</strong> <a href="{{$user->website}}" target="_blank">{{$user->website}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Gender:</strong> {{$user->gender}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <strong>Age:</strong> {{$user->age}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Birthdate:</strong> {{$user->birthdate}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Birth Month:</strong> {{$user->birth_month}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Birth Week:</strong> {{$user->birth_week}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Preferred Time:</strong> {{$user->preferred_time}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Appointment:</strong> {{$user->appointment}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <strong>Favorite Color:</strong> <span style="background-color: {{$user->favorite_color}};">{{$user->favorite_color}}</span>
                                            </li>
                                            <li class="list-group-item">
                                                <strong>User Behaviour Rating:</strong> {{$user->user_behaviour_rating}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <strong>Subscribed to Newsletter:</strong> {{$user->subscribed_to_newsletter ? 'Yes' : 'No'}}
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Status:</strong> {{$user->status}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection