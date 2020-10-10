@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-bottom: 20px">

            <div class="card"
                style="
                display: flex;
                position: relative;
                align-items: center;
                flex-direction: column;
                justify-content: center;">
                    <div class="card-body">
                        <h3 class="name" style="
                        font-size: 24px;
                        font-weight: 600;
                        text-align: center;">{{$user->name}}</h3>
                        <p class="title" style="
                        color: #7C8097;
                        font-size: .75em;
                        font-weight: 300;
                        text-align: center;
                        padding-top: .5em;
                        padding-bottom: .7em;
                        letter-spacing: 1.5px;
                        text-transform: uppercase;">{{$user->phone}}</p>
                        <p class="description" style="
                        color: #080911;
                        font-size: 14px;
                        font-weight: 300;
                        text-align: center;
                        margin-bottom: 1.3em;">{{$user->email}}</p>
                        <p class="description" style="
                        color: #080911;
                        font-size: 14px;
                        font-weight: 300;
                        text-align: center;
                        margin-bottom: 1.3em;">{{$user->address}}</p>
                        <a class="btn" href="restaurant/{{$user->id}}" role="button"
                        style="
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        color: #fff;
                        width: 200px;
                        outline: none;
                        border: none;
                        cursor: pointer;
                        font-weight: 300;
                        margin-left: auto;
                        margin-right: auto;
                        border-radius: 70px;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.274);
                        background: rgba(47, 24, 70, 0.897);
                        text-decoration: none;
                        text-transform: uppercase;
                        letter-spacing: 2.5px;
                        font-weight: 500;">Update Profile</a>
                    </div>
            </div>
        </div>

        <div class="col-md-6" style="margin-bottom: 20px">

            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-6" style="margin-bottom: 10px">
                        <div class="card text-white h-100" style="background:rgba(47, 24, 70, 0.897); margin-bottom: 47px;">
                            <div class="card-body" style="background:rgba(47, 24, 70, 0.897);">
                                <div class="rotate">
                                    <i></i>
                                </div>
                                <h6 class="text-uppercase">Orders</h6>
                                <h1 class="display-4">{{$orderCount}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px">
                        <div class="card text-white h-100" style="background:rgba(47, 24, 70, 0.897); margin-bottom: 47px;">
                            <div class="card-body" style="background: rgba(47, 24, 70, 0.897);">
                                <div class="rotate">
                                    <i></i>
                                </div>
                                <h6 class="text-uppercase">Products</h6>
                                <h1 class="display-4">{{$productCount}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

    <br/>


        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    User Reviews
                </div>
                <div class="card-body">
                @foreach($orders as $order)
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="background: none;">
                    <div class="row no-gutters">
                        <div class="col-md-1" style="">
                            <img src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" class="card-img" alt="user icon" style="text-align: center;">
                        </div>
                        <div class="col-md-11">
                            <h5 class="card-title" style="font-weight: bolder">{{$order->name}}</h5>
                            @for($i=0;$i<$order->rating;$i++)
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            @endfor
                            <p class="card-text">{{$order->comment}}</p>
                            <p class="card-text"><small class="text-muted">by <b>{{$order->name}}</b> {{$order->created_at}}</small></p>
                        </div>
                    </div>
                    </li>
                </ul>
                <hr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
