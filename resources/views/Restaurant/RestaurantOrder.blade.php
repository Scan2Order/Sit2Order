@extends('layouts.app3')

@section('content')
<div class="container">
<div class="card">
<div class="card-header">{{$user->name}} Pending Orders</div>

    <div class="card-body">

        @foreach($orders as $order)

        <div class="panel panel-primary">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0);">
                        <span class="badge">x{{ $item->qty}}</span>
                        <strong>{{ $item->item->name}}</strong>
                        <span class="badge">RM {{$item->price}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">
            </br>
                <strong>Total Price : RM {{$order->cart->totalPrice}}</strong>
            </br>
                <strong>Table Number : {{$order->table}}</strong>
            </div>
        </br>
            <form action="/restaurant/orders/{{$order->id}}" method="POST">
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success btn-lg btn-block btn-sm">Done</button>
            </form>
        </div>
        <hr>
        @endforeach

    </div>
</div>

</br>

<div class="card">
    <div class="card-header">{{$user->name}} Orders History</div>

        <div class="card-body">

            @foreach($dones as $done)

            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($done->cart->items as $item)
                        <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0);">
                            <span class="badge">x{{ $item->qty}}</span>
                            <strong>{{ $item->item->name}}</strong>
                            <span class="badge">RM {{$item->price}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                </br>
                    <strong>Total Price : RM {{$done->cart->totalPrice}}</strong>
                </br>
                    <strong>Table Number : {{$done->table}}</strong>
                </div>
            </div>
            <hr>
            @endforeach

        </div>
    </div>
</div>

@endsection
