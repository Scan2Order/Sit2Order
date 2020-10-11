@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Assign roles') }}</div>

            <div class="card-body">
            <form method="POST" action="/admin/dashboard/user/edit/{$id}">
                {{ csrf_field() }}
                {{method_field('post')}}

                <div class="form-group row">
                    <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>

                    <div class="col-md-6">
                    <select class="form-control" name="categories" id="categories" required>
                          <option value="">Select Role</option>
                          @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->display_name}}</option>
                          @endforeach
                          </select>
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
