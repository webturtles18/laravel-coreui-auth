@extends('layouts.guest')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mx-4 mb-4">
        <div class="card-body p-4">
          @include('includes.message')
          <form action="{{ route('password.forgot') }}" method="POST">
            @csrf
            <h3>Forgot Password</h3>
            <div class="input-group mb-3">
              <span class="input-group-text">
                <i class="fa fa-fw fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            </div>
            <div class="row">
              <div class="ms-auto col-auto">
                <button class="btn btn-block btn-primary" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
