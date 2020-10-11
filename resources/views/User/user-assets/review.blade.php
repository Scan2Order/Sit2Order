@extends('layouts.app')

@section('content')
<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            User Reviews
        </div>
        <div class="card-body">

        @foreach($orders as $order)
        @if($order->rating == 0)
        @else
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-1" style="">
                    <img src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" class="card-img" alt="user icon">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$order->name}}</h5>
                        @for($i=0;$i<$order->rating;$i++)
                        <label>☆</label>
                        @endfor
                        <p class="card-text">{{$order->comment}}</p>
                        <p class="card-text"><small class="text-muted">by <b>{{$order->name}}</b> {{$order->created_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
    </div>
</div>
@endsection
