@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
<img src = "https://icons-for-free.com/iconfiles/png/512/avatar+human+man+profile+icon-1320085876716628234.png"  class="center">

                <div class="centered">
                
                    <h1>Name: {{$user->name}}</h1>
                    <h1>E-mail: {{$user->email}}</h1>
                    <h1>Gender: {{$user->gender}}</h1>
                    <h1>Phone Number:  {{$user->phone}}</h1>
                </div>
                <a href="user/{{$user->id}}">
                    <button class="btn btn-primary btn-sm">Update Profile</button>
                </a>

            </div>
        </div>
    </div>
</div>

<style>
    h1{
        color:cadetblue;
        text-align: left;
    }

img{
    margin-bottom: 30px;
    text-align: center;
}

button{
    text-align: center;
}



    </style>
@endsection