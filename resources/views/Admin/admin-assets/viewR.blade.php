@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- <div class="card">
            <div class="card-header">{{$user->name}}</div>

            <div class="card-body">
            <h1>{{$user->name}}</h1>
            <h1>{{$user->email}}</h1>
            <h1>{{$user->gender}}</h1>
            <h1>{{$user->phone}}</h1>
            </div>
            <a href="{{url('/admin/dashboard/restaurant')}}">
            <button class="btn btn-primary btn-sm">Back</button>
            </a>
        </div> --}}
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
                    <a class="btn" href="{{url('/admin/dashboard/restaurant')}}" role="button"
                    style="
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
                    font-weight: 500;">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
