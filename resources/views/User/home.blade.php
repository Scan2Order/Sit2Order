@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
<img src = "https://icons-for-free.com/iconfiles/png/512/avatar+human+man+profile+icon-1320085876716628234.png"  class="center">

                <div class="centered">
                
                    <h1>Name: {{$user->name}}</h1>
                    <h1>E-mail: {{$user->email}}</h1>
                    <h1>Gender: {{$user->gender}}</h1>
                    <h1>Phone Number:  {{$user->phone}}</h1>
                </div>
                <a href="user/{{$user->id}}">
                    <button class="btn btn-secondary btn-sm">Update Profile</button>
                </a>

            </div> --}}
            <div class="card"
            style="
            display: flex;
            position: relative;
            align-items: center;
            flex-direction: column;
            justify-content: center;">
                <div class="card-body">
                    <h3 class="name" style="
                    font-size: 24px;
                    font-weight: 600;
                    text-align: center;">{{$user->name}}</h3>
                    <p class="title" style="
                    color: #7C8097;
                    font-size: .75em;
                    font-weight: 300;
                    text-align: center;
                    padding-top: .5em;
                    padding-bottom: .7em;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;">{{$user->phone}}</p>
                    <p class="description" style="
                    color: #080911;
                    font-size: 14px;
                    font-weight: 300;
                    text-align: center;
                    margin-bottom: 1.3em;">{{$user->gender}} | {{$user->email}}</p>
                    <a class="btn" href="user/{{$user->id}}" role="button"
                    style="
                    color: #fff;
                    width: 200px;
                    outline: none;
                    border: none;
                    cursor: pointer;
                    font-weight: 300;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 70px;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);
                    background: rgba(47, 24, 70, 0.897);
                    text-decoration: none;
                    text-transform: uppercase;
                    letter-spacing: 2.5px;
                    font-weight: 500;">Update Profile</a>
                </div>
            </div>
            <br/>
            <div class="card">
                <div class="card-header">{{ __('Orders history') }}</div>

                <div class="card-body">
                    @foreach($orders as $order)
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0);">
                                    <span class="badge">x{{ $item->qty}}</span>
                                    <strong>{{ $item->item->name}}</strong>
                                    <span class="badge">RM {{$item->price}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <ul class="list-group">
                                <li class="list-group item">
                                </br>
                                    <strong>Total Price : RM {{$order->cart->totalPrice}}</strong>
                                </li>
                                @if (!($order->rating))
                                <br/>
                                <a class="btn btn-dark btn-sm btn-lg btn-block" href="user/rate/{{$order->id}}" style="background: rgba(47, 24, 70, 0.897);">
                                    Rate
                                </a>
                                @else
                                <br/>
                                <p style="font-style: italic; opacity: 0.5;">Rated</p>
                                @endif
                            </ul>
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
