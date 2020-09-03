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
<div>
<table class="table table-bordered table-dark table-striped mb-0">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    </table>
  </div>
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-bordered table-striped table-dark mb-0">
      <tbody>
        @foreach ($users as $user)
        <user-show id="{{$user->id}}" name="{{$user->name}}" email="{{$user->email}}" gender="{{$user->gender}}" phone="{{$user->phone}}"></user-show>
        @endforeach
</tbody>
</table>
</div>
@endsection