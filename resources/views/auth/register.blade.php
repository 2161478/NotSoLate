@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container register">
            <img class="logo" src="{{ asset('storage/img/logo.png') }}" alt="Logo">
            <div class="form-box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           placeholder="Confirm Password" required>

                    <button type="submit" class="btn btn-info btn-block submit">
                        {{ __('Register') }}
                    </button>
                    {!! app('captcha')->render(); !!}
                </form>
            </div>
        </div>
    </div>
@endsection
