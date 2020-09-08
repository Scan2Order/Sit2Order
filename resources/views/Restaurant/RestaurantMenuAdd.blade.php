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
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                  <option value="Roti">Roti</option>
                  <option value="Nasi">Nasi</option>
                  <option value="Goreng">Goreng</option>
                  <option value="Minuman">Minuman</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

              <div class="col-md-6">
                <input id="description" type="text" class="form-control" name="description" required autocomplete="description">
              </div>
            </div>

            <div class="form-group row">
              <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

              <div class="col-md-6">
                <input id="price" type="number" class="form-control" name="price" required step="0.01">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
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