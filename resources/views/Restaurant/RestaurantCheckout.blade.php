@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Checkout</h1>
        </div>
        <div class="card-body">
            <h4>Your Total : RM {{ $total }}</h4>
            <form action="{{ route('Restaurant.RestaurantCheckout')}}" method="POST" class="checkout-form">
            {{csrf_field()}}
            {{method_field('post')}}
            <div class="form-group">
                <div class="form-group">
                    <input type="text" placeholder="Full Name" id="name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Address" id="address" class="form-control" name="address" required>
                </div>
                <hr>
                    <div class="form-group">
                        <input type="text" placeholder="Card Holder Name" id="card-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Credit/Debit Card Number" id="card-number" class="form-control" required>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" placeholder="Expiration Month" id="expiration-m" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" placeholder="Expiration Year" id="expiration-y" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" placeholder="CVC" id="card-cvc" class="form-control" required>
                    </div>

                </div>
                <hr>
                <h5>Enter Your Table Number :</h5>
                <div class="form-group">
                    <input type="text" placeholder="Table number" id="table-number" class="form-control" name="table" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
