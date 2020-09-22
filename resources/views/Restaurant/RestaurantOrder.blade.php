@extends('layouts.app3')

@section('content')
<div class="card">
<div class="card-header">{{$user->name}} orders</div>

    <div class="card-body">
        @foreach($orders as $order)
        <div class="panel panel-primary">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item">
                        <span class="badge">RM {{$item->price}} RM</span>
                        {{ $item->item->name}} | {{ $item->qty}} Units
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">
                <strong>Total Price : {{$order->cart->totalPrice}}</strong>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</div>
@endsection
