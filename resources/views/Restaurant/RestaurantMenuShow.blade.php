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
            <div class="card" style="width: flex; margin-bottom: 10px">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">RM {{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('Restaurant.addToCart', ['id' => $product->id])}}" class="stretched-link">
                    </a>
                </div>
            </div>
            @endforeach

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
