@extends('layouts.app2')

@section('content')
<div>
  <h1>Restaurant Add</h1>
</div>
@foreach ($restaurants as $restaurant)
<rest-show id="{{$restaurant->id}}" name="{{$restaurant->name}}" phone="{{$restaurant->phone}}"></rest-show>
@endforeach
@endsection