@extends('layouts.app3')

@section('content')
<div>
  @foreach ($products as $product)
  <dash-menu categories="{{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></dash-menu>
  @endforeach
</div>
@endsection