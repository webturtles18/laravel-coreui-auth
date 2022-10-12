@extends('layouts.guest')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mx-4 mb-4">
        <div class="card-body p-4">
          @include('includes.message')
          <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <h3>Reset Password</h3>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-lock"></i>
              </span>
              <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
            <div class="input-group mb-4">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-lock"></i>
              </span>
              <input type="password" name="password_confirmation" value="" class="form-control"
                placeholder="Confirm password">
            </div>
            <div class="row">
              <div class="ms-auto col-auto">
                <button class="btn btn-block btn-primary" type="submit">Reset Password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
