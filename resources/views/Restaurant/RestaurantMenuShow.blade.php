@extends('layouts.app')

@section('content')
@if(Session::has('success'))
<div class="row">
  <div class="col-md-12">
    <div id="charge-message" class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif

<div class="container">
    <div class="card" style="align-items: center;">
        <ul class="nav" style="margin-top: 20px">
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
                <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Drinks">Drinks</a>
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
        </ul>
        <div class="col-md-12" style="margin: 10px">
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

<style>
    .card {
        margin-bottom: 0.25rem;
        display: flex;
        background: rgba(255, 255, 255, 0.37);
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.034), 0 15px 12px rgba(0, 0, 0, 0.034);
    }
</style>


@endsection
