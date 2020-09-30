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
            <hr>
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
                                <a href="user/rate/{{$order->id}}">
                                    <button class="btn btn-primary btn-sm">Rate</button>
                                </a>
                                @else
                                <p>Rated</p>
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
@endsection
