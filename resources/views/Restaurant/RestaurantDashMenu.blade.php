@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="">
        <div class="row justify-content-center">
            <div class="card h-75" >
                <div class="card-header">Manage Menu</div>
                    @if (\Session::has('status'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('status') !!}</li>
                        </ul>
                    </div>
                    @endif

                <div class="card-body" style="height: 75vh;">

                    <table class="table table-bordered table-striped h-100" style="table-layout:fixed;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">ID</th>
                            <th>Name</th>
                            <th>Categories</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="max-height: 42rem;">
                    @foreach ($products as $product)
                    <tr>
                        <th style="width: 5%;">{{$product->id}}</th>
                        <td class="norm-space">{{$product->name}}</td>
                        <td class="norm-space">{{$product->categories}}</td>
                        <td class="norm-space">{{$product->description}}</td>
                        <td class="norm-space">{{number_format($product->price,2)}}</td>
                        <td>
                            <div class="form-group">
                            <a href="/restaurant/menu/{{$product->id}}">
                            <button class="btn btn-secondary btn-sm">Edit</button>

                            </div>
                            <div class="form-group">

                            <form action="/restaurant/menu/{{$product->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <br />
@endsection
