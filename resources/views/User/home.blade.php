@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>

                <div class="card-body">
                    <h1>{{$user->name}}</h1>
                    <h1>{{$user->email}}</h1>
                    <h1>{{$user->gender}}</h1>
                    <h1>{{$user->phone}}</h1>
                </div>
                <a href="user/{{$user->id}}">
                    <button class="btn btn-primary btn-sm">Update Profile</button>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection