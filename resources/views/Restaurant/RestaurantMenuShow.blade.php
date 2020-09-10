@extends('layouts.app')

@section('content')


<a class="btn btn-primary" href="/menu?categories=Nasi" role="button">Nasi</a>
<a class="btn btn-primary" href="/menu?categories=Roti" role="button">Roti</a>
<a class="btn btn-primary" href="/menu?categories=Goreng" role="button">Goreng</a>
<a class="btn btn-primary" href="/menu?categories=Minuman" role="button">Minuman</a>
<a class="btn btn-primary" href="/menu" role="button">All</a>

@foreach ($products as $product)
<rest-menu categories=" {{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
@endforeach
@endsection