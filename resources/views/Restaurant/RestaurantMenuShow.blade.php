@extends('layouts.app')

@section('content')
@if(Session::has('success'))
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div id="charge-message" class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif


<a class="btn btn-primary" href="/menu?categories=Nasi" role="button">Nasi</a>
<a class="btn btn-primary" href="/menu?categories=Roti" role="button">Roti</a>
<a class="btn btn-primary" href="/menu?categories=Goreng" role="button">Goreng</a>
<a class="btn btn-primary" href="/menu?categories=Minuman" role="button">Minuman</a>
<a class="btn btn-primary" href="/menu" role="button">All</a>

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