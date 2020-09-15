@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <h1>Checkout</h1>
    <h4>Your Total : RM {{ $total }}</h4>
    <form action="{{ route('Restaurant.RestaurantCheckout')}}" method="POST" class="checkout-form">
      {{csrf_field()}}
      {{method_field('post')}}
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" name="name" required>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="name">Address</label>
            <input type="text" id="address" class="form-control" name="address" required>
          </div>
        </div>
        <hr>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="name">Card Holder Name</label>
            <input type="text" id="card-name" class="form-control" required>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="name">Credit/Debit Card Number</label>
            <input type="text" id="card-number" class="form-control" required>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <label for="name">Expiration Month</label>
                <input type="text" id="expiration-m" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label for="name">Expiration Year</label>
                <input type="text" id="expiration-y" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="name">CVC</label>
            <input type="text" id="card-cvc" class="form-control" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-success">Buy now</button>
    </form>
  </div>
</div>
@endsection