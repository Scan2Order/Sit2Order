@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="/menu?categories=Nasi">Nasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menu?categories=Roti">Roti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menu?categories=Goreng">Goreng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menu?categories=Minuman">Minuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/menu">All</a>
            </li>
          </ul>
          @foreach ($products as $product)
            <rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
            @endforeach
    </div>
</div>

{{-- <div class="card text-xs-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs pull-xs-left">
            <li class="nav-item">
                <a class="nav-link active" href="/menu?categories=Nasi">Nasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/menu?categories=Roti">Roti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/menu?categories=Goreng">Goreng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/menu?categories=Minuman">Minuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/menu">All</a>
            </li>
        </ul>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body stretched-link" href="#">
            @foreach ($products as $product)
            <rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
            @endforeach
        </div>
      </div>

</div> --}}

{{-- <a class="btn btn-primary" href="/menu?categories=Nasi" role="button">Nasi</a>
<a class="btn btn-primary" href="/menu?categories=Roti" role="button">Roti</a>
<a class="btn btn-primary" href="/menu?categories=Goreng" role="button">Goreng</a>
<a class="btn btn-primary" href="/menu?categories=Minuman" role="button">Minuman</a>
<a class="btn btn-primary" href="/menu" role="button">All</a> --}}

{{-- @foreach ($products as $product) --}}
{{-- <rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu> --}}
{{-- @endforeach --}}
@endsection

