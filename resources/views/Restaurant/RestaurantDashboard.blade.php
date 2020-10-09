@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- <div class="card">
            <div class="card-header">{{$user->name}}</div>

            <div class="card-body">
            <h1>{{$user->name}}</h1>
            <h1>{{$user->email}}</h1>
            <h1>{{$user->gender}}</h1>
            <h1>{{$user->phone}}</h1>
            </div>
            <a href="restaurant/{{$user->id}}">
            <button class="btn btn-primary btn-sm">Update Profile</button>
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
                    margin-bottom: 1.3em;">{{$user->email}}</p>
                    <a class="btn" href="restaurant/{{$user->id}}" role="button"
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
        </div>
        <div class="col-sm-6">
            <order-total :total-order="{{$orderCount}}"></order-total>
        </div>
        <div class="col-sm-6">
            <product-total :total-product="{{$productCount}}"></product-total>
        </div>
        <div class="card">
        <div>
            User Reviews
        </div>
        @foreach($orders as $order)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" class="card-img" alt="user icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{$order->name}}</h5>
                @for($i=0;$i<$order->rating;$i++)
                <label>☆</label>
                @endfor
                <p class="card-text">{{$order->comment}}</p>
                <p class="card-text"><small class="text-muted">by <b>{{$order->name}}</b> {{$order->created_at}}</small></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
