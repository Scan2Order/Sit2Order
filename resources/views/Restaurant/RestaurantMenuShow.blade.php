@extends('layouts.app')

@section('content')
@foreach ($products as $product)
<rest-menu categories="{{$product->categories}}" name="{{$product->name}}" description="{{$product->description}}" price="{{number_format($product->price,2)}}"></rest-menu>
@endforeach
@endsection