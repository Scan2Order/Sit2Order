@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Update Profile') }}</div>

            <div class="card-body">
            <form method="POST" action="/user/{id}">
                {{ csrf_field() }}
                {{method_field('post')}}

                <div class="form-group row">
                    <div class="col-md-12">
                    <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                    <input id="phone" type="text" value="{{ $user->phone }}" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" required>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                    {{ __('Update') }}
                    </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
