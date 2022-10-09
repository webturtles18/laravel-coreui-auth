@extends('layouts.guest')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mx-4 mb-4">
        <div class="card-body p-4">
          @include('includes.message')
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Register</h1>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-user"></i>
              </span>
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            </div>
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
              <div class="me-auto col-auto">
                <a href="{{ route('login') }}">Have account already?</a>
              </div>
              <div class="col-auto">
                <button class="btn btn-block btn-primary" type="submit">Create Account</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
