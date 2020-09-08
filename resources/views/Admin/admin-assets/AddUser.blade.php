@extends('layouts.app2')

@section('content')
<div>
  <h1>User Add</h1>
</div>
@foreach ($users as $user)
<user-show id="{{$user->id}}" name="{{$user->name}}" email="{{$user->email}}" gender="{{$user->gender}}" phone="{{$user->phone}}"></user-show>
@endforeach
@endsection