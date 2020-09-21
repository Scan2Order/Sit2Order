@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add product to menu') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/restaurant/addmenu">
                        {{ csrf_field() }}

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <select class="form-control" name="categories" id="categories" required>
                                <option value="">Select Categories</option>
                                <option value="Roti">Roti</option>
                                <option value="Nasi">Nasi</option>
                                <option value="Goreng">Goreng</option>
                                <option value="Minuman">Minuman</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea id="description" placeholder="Add a description" type="text" class="form-control" name="description" required autocomplete="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="price" placeholder="Price" type="number" class="form-control" name="price" required step="0.01">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ __('Add Product') }}
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
