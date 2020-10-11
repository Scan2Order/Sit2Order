@extends('layouts.app2')

@section('content')
<div class="othercontainer">
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="basecard">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4" style="margin-bottom: 10px">
                            <div class="card text-white h-100" style="background:rgba(47, 24, 70, 0.897); margin-bottom: 10px;">
                                <div class="card-body" style="background:rgba(47, 24, 70, 0.897);">
                                    <div class="rotate">
                                        <i></i>
                                    </div>
                                    <h6 class="text-uppercase">Users</h6>
                                    <h1 class="display-4">{{$userCount}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="margin-bottom: 10px">
                            <div class="card text-white h-100" style="background:rgba(47, 24, 70, 0.897); margin-bottom: 10px;">
                                <div class="card-body" style="background:rgba(47, 24, 70, 0.897);">
                                    <div class="rotate">
                                        <i></i>
                                    </div>
                                    <h6 class="text-uppercase">Restaurants</h6>
                                    <h1 class="display-4">{{$roleCount}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="margin-bottom: 10px">
                            <div class="card text-white h-100" style="background:rgba(47, 24, 70, 0.897); margin-bottom: 10px;">
                                <div class="card-body" style="background:rgba(47, 24, 70, 0.897);">
                                    <div class="rotate">
                                        <i></i>
                                    </div>
                                    <h6 class="text-uppercase">Orders</h6>
                                    <h1 class="display-4">{{$orderCount}}</h1>
                                </div>
                            </div>
                        </div>
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
                                @foreach ($restaurants as $restaurant)
                                <tr>
                                    <th style="width: 5%;">{{$restaurant->id}}</th>
                                    <td class="norm-space">{{$restaurant->name}}</td>
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
