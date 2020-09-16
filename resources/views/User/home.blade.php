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
            <hr>
            <div class="card">
                <div class="card-header">{{ __('Orders history') }}</div>

                <div class="card-body">
                    @foreach($orders as $order)
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">RM {{$item['price']}} RM</span>
                                    {{ $item['item']['name']}} | {{ $item['qty']}} Units
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <strong>Total Price : {{$order->cart->totalPrice}}</strong>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
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