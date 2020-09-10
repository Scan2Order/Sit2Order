@extends('layouts.app2')

@section('content')
<div class="othercontainer">
  <div class="">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="basecard">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <user-total :total-user="{{$userCount}}"></user-total>

          <div class="card-body">
            <h1>Admin Dashboard</h1>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 5%;">ID</th>
        <th >Name</th>
        <th >Email</th>
        <th >Gender</th>
        <th >Phone</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
       <th style="width: 5%;">{{$user->id}}</th>
       <td class="norm-space">{{$user->name}}</td>
       <td class="norm-space">{{$user->email}}</td>
       <td class="norm-space">{{$user->gender}}</td>
       <td class="norm-space">{{$user->phone}}</td>
     </tr>
     @endforeach

    </tbody>
  </table>
          </div>
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
