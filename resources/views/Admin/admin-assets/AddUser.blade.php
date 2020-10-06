@extends('layouts.app2')

@section('content')
<div class="othercontainer">
    <div class="">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="basecard">
            <div class="card-header">User Manage</div>
            @if (\Session::has('status'))
            <div class="alert alert-danger">
                <ul>
                <li>{!! \Session::get('status') !!}</li>
                </ul>
            </div>
            @endif

            <div class="card-body">

                <table class="table table-bordered table-striped" style="table-layout:fixed;">
                <thead>
                    <tr>
                    <th style="width: 5%;">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Action</th>
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
                    <td>
                    <a href="/admin/dashboard/user/view/{{$user->id}}">
                        <button class="btn btn-secondary btn-sm">View</button>
                    </a>
                        <form action="/admin/dashboard/user/{{$user->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        {{-- <!-- @csrf
                        @method('DELETE') --> --}}
                        </br>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
            </div>
        </div>
        <br />
@endsection
