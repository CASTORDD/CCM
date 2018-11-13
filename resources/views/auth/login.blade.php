@extends('layouts.app')

@section('content')
<div class="login">
    <div class="login_wrapper">
        <div class="form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>

                    <div>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-default submit">
                            {{ __('Login') }}
                        </button>

                        <a class="reset_pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection
