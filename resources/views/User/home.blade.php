@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>{{Auth::user()->name}}</h1>
                    <h1>{{Auth::user()->email}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection