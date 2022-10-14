@extends('layouts.guest')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mx-4 mb-4">
        <div class="card-body p-4">
          <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
          </div>

          @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
              {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
          @endif

          <div class="row">
            <div class="col-6">
              <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button class="btn btn-primary" type="submit">{{ __('Resend Verification Email') }}</button>
              </form>
            </div>
            <div class="col-6 text-end">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-dark">
                  {{ __('Logout') }}
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
