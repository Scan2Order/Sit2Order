@extends('layouts.app2')

@section('content')
<div class="othercontainer">
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="basecard">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>
                    <div class="row">

                        <div class="col-sm-6">
                            <user-total :total-user="{{$userCount}}"></user-total>
                        </div>
                        <div class="col-sm-6">
                            <rest-total :total-restaurant="{{$restCount}}"></rest-total>
                        </div>
                    </div>

                    <div class="card-body">
                        <h1>User List</h1>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <th style="width: 5%;">{{$user->id}}</th>
                                    <td class="norm-space">{{$user->name}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </br>
                        <h1>Restaurant List</h1>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <th style="width: 5%;">{{$role->id}}</th>
                                    <td class="norm-space">{{$role->name}}</td>
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

@endsection
