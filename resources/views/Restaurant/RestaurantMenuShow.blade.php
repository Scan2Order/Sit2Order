@extends('layouts.app')

@section('content')
{{-- @if(Session::has('success'))
<div class="row">
  <div class="col-md-12">
    <div id="charge-message" class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif --}}
<h1>{{$restaurant['name']}}</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Feedbacks</a>
                    </li>
                </ul>
                </div>
                <hr>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu">All</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Rice">Rice</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Bread">Bread</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Signature">Signature</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Western">Western</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Noodle">Noodle</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Desert">Desert</a>
                                </li>
                                <li class="nav-item" style="font-weight: bolder;">
                                    <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Beverages">Beverages</a>
                                </li>
                            </ul>
                            @foreach ($products as $product)
                    {{-- <div class="card" style="width: 65rem; margin-bottom: 10px; box-shadow: none; ">
                        <div class="card-body" style="box-shadow: none;">
                            <h5 class="card-title" style="font-weight: bolder;">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text" style="font-weight: bold;">RM {{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('Restaurant.addToCart', ['id' => $product->id])}}" class="stretched-link">
                            </a>
                        </div>
                    </div> --}}
                            <div class="list-group" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);">
                                <a href="{{ route('Restaurant.addToCart', ['id' => $product->id])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1" style="font-weight: bolder;">{{ $product->name }}</h5>
                                    </div>
                                    <p class="mb-1 card-text" style="opacity: 0.7">{{ $product->description }}</p>
                                    <small style="font-weight: bold;">RM {{ number_format($product->price, 2) }}</small>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            @foreach($orders as $order)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background: none;">
                                @if($order->rating == 0)
                                @else
                                    <div class="row no-gutters">
                                        <div class="col-md-1">
                                            <img src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" class="card-img" alt="user icon" style="text-align: center;">
                                        </div>
                                        <div  class="col-md-11">
                                            <h5 class="card-title" style="font-weight: bolder">{{$order->name}}</h5>
                                            @for($i=0;$i<$order->rating;$i++)
                                            <span class="fa fa-star checked" style="color: orange;"></span>
                                            @endfor
                                            <p class="card-text">{{$order->comment}}</p>
                                            <p class="card-text"><small class="text-muted">by <b>{{$order->name}}</b> {{$order->created_at}}</small></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            @endif
                            @endforeach
                        </div>
                    </div>

                </div>
                {{-- <button class="btn btn-secondary btm-sm" style="position: fixed; bottom: 20px; right: 20px; background-color: rebeccapurple; z-index: 1; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.678);">
                <a href="{{route('Restaurant.shoppingCart')}}" style="text-decoration: none; color: white; font-family: 'Roboto', sans-serif;
                font-size: 11px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;">
                    <i class="fa fa-shopping-cart"></i> View Cart
                <span class="badge" style="background-color: rgb(43, 21, 65); color: white; letter-spacing: 0px;">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                </a>
                </button> --}}

                <!-- Atas yang lama for backup. -->

                <a class="btn btn-secondary btm-sm" href="{{route('Restaurant.shoppingCart')}}" role="button"
                style="position: fixed; bottom: 20px; right: 20px; background-color: rebeccapurple; z-index: 1; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.678); text-decoration: none; color: white; font-family: 'Roboto', sans-serif; font-size: 11px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;">
                <i class="fa fa-shopping-cart"></i> View Cart
                <span class="badge" style="background-color: rgb(43, 21, 65); color: white; letter-spacing: 0px;">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        margin-bottom: 0.25rem;
        display: flex;
        background: rgba(255, 255, 255, 0.37);
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.034), 0 15px 12px rgba(0, 0, 0, 0.034);
    }
</style>


@endsection
