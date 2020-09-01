@extends('layouts.app2')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <h1>Admin Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<br />
@foreach ($users as $user)
<user-show id="{{$user->id}}" name="{{$user->name}}" email="{{$user->email}}" gender="{{$user->gender}}" phone="{{$user->phone}}"></user-show>
@endforeach
@endsection