@extends('layouts.app2')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div>
          <user-total :total-user="{{$userCount}}"></user-total>
        </div>
        <div>
          <rest-total :total-restaurant="{{$restCount}}"></rest-total>
        </div>

        <div class="card-body">
          <h1>Admin Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<br />
<div>
  @foreach ($users as $user)
  <user-show id="{{$user->id}}" name="{{$user->name}}" email="{{$user->email}}" gender="{{$user->gender}}" phone="{{$user->phone}}"></user-show>
  @endforeach
</div>
<div>
  @foreach ($restaurants as $restaurant)
  <rest-show id="{{$restaurant->id}}" name="{{$restaurant->name}}" phone="{{$restaurant->phone}}"></rest-show>
  @endforeach
</div>
@endsection