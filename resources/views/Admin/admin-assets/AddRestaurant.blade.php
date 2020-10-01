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

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th>Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <th style="width: 5%;">{{$role->id}}</th>
                                    <td class="norm-space">{{$role->name}}</td>
                                    <td>
                                        <a href="/admin/dashboard/restaurant/view/{{$role->id}}">
                                            <button class="btn btn-secondary btn-sm">View</button>
                                        </a>
                                    </td>
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
