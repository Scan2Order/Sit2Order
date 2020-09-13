@extends('layouts.app3')

@section('content')
<div class="othercontainer">
  <div class="">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="basecard">
          <div class="card-header">Menu Manage</div>
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
                  <th>Categories</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <th style="width: 5%;">{{$product->id}}</th>
                  <td class="norm-space">{{$product->name}}</td>
                  <td class="norm-space">{{$product->categories}}</td>
                  <td class="norm-space">{{$product->description}}</td>
                  <td class="norm-space">{{number_format($product->price,2)}}</td>
                  <td>
                    <a href="/restaurant/menu/{{$product->id}}">
                      <button class="btn btn-primary btn-sm">Edit</button>

                      <form action="/restaurant/menu/{{$product->id}}" method="POST">
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
      <br />
      @endsection