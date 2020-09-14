@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="display: flex; align-items: center;">
        <ul class="nav" style="margin-top: 20px">
            <li class="nav-item" style="font-weight: bolder;">
                <a class="nav-link" style="color: rebeccapurple" href="/menu">All</a>
            </li>
            <li class="nav-item" style="font-weight: bolder;">
                <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Nasi">Nasi</a>
            </li>
            <li class="nav-item" style="font-weight: bolder;">
                <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Roti">Roti</a>
            </li>
            <li class="nav-item" style="font-weight: bolder;">
                <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Goreng">Goreng</a>
            </li>
            <li class="nav-item" style="font-weight: bolder;">
                <a class="nav-link" style="color: rebeccapurple" href="/menu?categories=Minuman">Minuman</a>
            </li>

        </ul>
        <div style="margin: 10px">
            @foreach ($products as $product)
            <rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
            @endforeach
        </div>
    </div>
</div>
@endsection

@foreach ($products as $product)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->description }}</p>
    <p class="card-text">RM {{ number_format($product->price, 2) }}</p>
    <a href="{{ route('Restaurant.addToCart', ['id' => $product->id])}}">
      <button class="btn btn-primary btn-sm">Add To Cart</button>
    </a>
  </div>
</div>
@endforeach
@endsection
