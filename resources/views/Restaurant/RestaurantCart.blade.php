@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    @if(Session::has('cart'))
    <div class="card-body">
      <ul class="list-group list-group-flush">
        @foreach($products as $product)
        <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0);">
          <span class="badge">{{$product['qty']}}</span>
          <strong>{{$product['item']['name']}}</strong>
          <span class="label label-success">{{$product['price']}}</span>
          <div class="dropdown">
            <button type="button" class="btn btn-secondary btn-sm btn xs dropdown-toggle" data-toggle="dropdown">Edit <span class="caret"></span></button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('Restaurant.reduceByOne', ['id' => $product['item']['id']])}}">Reduce by 1</a>
              <a class="dropdown-item" href="{{route('Restaurant.remove', ['id' => $product['item']['id']])}}">Remove Order</a>
            </div>
          </div>
          @endforeach
      </ul>

      <div class="card-body">
        <strong>Total : RM {{$totalPrice}}</strong>
      </div>

      <div class="card-body">
        <a href="{{route('Restaurant.RestaurantCheckout')}}" type="button" class="btn btn-success btn-lg btn-block" style="margin-top: 2rem">Checkout</a>
      </div>
    </div>
    @else
    <div class="card-body">
      <h2>No item in cart</h2>
    </div>
    @endif
    </li>
    </ul>
    <a href="{{url('/menu')}}" type="button" class="btn btn-success btn-lg btn-block" style="margin-top: 2rem">Back to menu</a>
  </div>
</div>
@endsection