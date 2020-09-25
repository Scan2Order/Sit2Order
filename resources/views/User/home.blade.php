@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>

                <div class="card-body">
                    <h1>{{$user->name}}</h1>
                    <h1>{{$user->email}}</h1>
                    <h1>{{$user->gender}}</h1>
                    <h1>{{$user->phone}}</h1>
                </div>
                <a href="user/{{$user->id}}">
                    <button class="btn btn-primary btn-sm">Update Profile</button>
                </a>

            </div>
            <hr>
            <div class="card">
                <div class="card-header">{{ __('Orders history') }}</div>

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
                            <ul class="list-group">
                                <li class="list-group item">
                                </br>
                                    <strong>Total Price : RM {{$order->cart->totalPrice}}</strong>
                                </li>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Rate
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">How was your food?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-secondary">Rate</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
