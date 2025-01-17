@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Product') }}</div>
                <div class="card-body">

                <form method="POST" action="/restaurant/menu/{{$id}}">
                    {{ csrf_field() }}
                    {{method_field('post')}}

                    <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>

                    <div class="col-md-6">
                    <select class="form-control" name="categories" id="categories" required>
                            <option value="">Select Categories</option>
                            <option value="Bread">Bread</option>
                            <option value="Rice">Rice</option>
                            <option value="Western">Western</option>
                            <option value="Signature">Signature</option>
                            <option value="Noodle">Noodle</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Beverages">Beverages</option>
                            </select>
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                    <input id="description" type="textarea" class="form-control" name="description" value="{{$product->description}}">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                        <div class="col-md-6">
                        <input id="price" type="number" class="form-control" name="price" required step="0.01" value="{{$product->price}}">
                        </div>
                    </div>

        </br>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" style="background: rgba(47, 24, 70, 0.897);">
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
