@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container login">
            <img class="logo" src="{{ asset('storage/img/logo.png') }}" alt="Logo">
            <div class="form-box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" placeholder="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <button type="submit" class="btn btn-info btn-block submit">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <br><br>
                    <span>Don't have an account?</span>
                    <a class="btn btn-link" href="{{ route('register') }}">Register Here.</a>
                </form>
            </div>
        </div>
    </div>
@endsection
