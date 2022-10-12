@extends('layouts.guest')
@section('content')
  <div class="col-lg-8">
    <div class="card-group d-block d-md-flex row">
      <div class="card col-md-7 mb-0 p-4">
        <div class="card-body">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <h3>Login</h3>
            <p class="text-medium-emphasis">Sign In to your account</p>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            </div>
            <div class="input-group mb-4">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-lock"></i>
              </span>
              <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-6">
                <button class="btn btn-primary px-4" type="submit">Login</button>
              </div>
              <div class="col-6 text-end">
                <a href="{{ route('password.forgot') }}">Forgot password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card col-md-5 bg-primary py-5 text-white">
        <div class="card-body text-center">
          <div>
            <h2>Sign up</h2>
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
