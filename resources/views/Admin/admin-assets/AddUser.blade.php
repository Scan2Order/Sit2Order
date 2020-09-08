@extends('layouts.app2')

@section('content')
<div>
  <h1>User Add</h1>
  <table class="table table-bordered table-dark table-striped">
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
    {{-- <tbody>
      <tr>
        <td>Data1111111111111111111111111</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data2222222222222222222222222</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data3333333333333333333333333</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
      <tr>
        <td>Data</td>
        <td>Data</td>
        <td>Data</td>
      </tr>
    </tbody> --}}
  </table>
</div>
@endsection
