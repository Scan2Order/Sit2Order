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
                                    <th>Adress</th>
                                    <th>Phone</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurants as $restaurant)
                                <tr>
                                    <th style="width: 5%;">{{$restaurant->id}}</th>
                                    <td class="norm-space">{{$restaurant->name}}</td>
                                    <td class="norm-space">{{$restaurant->address}}</td>
                                    <td class="norm-space">{{$restaurant->phone}}</td>
                                    <td>
                                        <a href="/admin/dashboard/restaurant/{{$restaurant->id}}">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                        <form action="/admin/dashboard/restaurant/{{$restaurant->id}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
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
        </div>
    </div>
</div>
<br />
@endsection