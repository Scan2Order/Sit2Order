@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Assign roles') }}</div>

            <div class="card-body">
            <form method="POST" action="/admin/dashboard/restaurant/{$id}">
                {{ csrf_field() }}
                {{method_field('post')}}

                <div class="form-group row">
                    <div class="col-md-12">
                    <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
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
