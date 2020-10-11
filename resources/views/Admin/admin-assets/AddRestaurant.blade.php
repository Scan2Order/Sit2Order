@extends('layouts.app2')

@section('content')
<div class="othercontainer">
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="basecard">
                    <div class="card-header">Restaurant Management</div>
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
                                    <th>Action</th>

                                </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">{{$user->id}}</th>
                                    <td class="norm-space">{{$user->name}}</td>
                                    <td>
                                        <a href="/admin/dashboard/restaurant/view/{{$user->id}}">
                                            <button class="btn btn-secondary btn-sm">View</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
@endsection
