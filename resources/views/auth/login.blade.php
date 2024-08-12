@extends('layouts.login.base')
@section('content')
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2"
                                src="build/assets/images/app-logo.svg" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="email mb-3">
                                <label class="sr-only" for="signin-email">{{ __('Email') }}</label>
                                <input id="signin-email" name="email" type="email" class="form-control signin-email"
                                    placeholder="{{ __('Email address') }}" value="{{ old('email') }}" required autofocus
                                    autocomplete="username">
                                @if ($errors->has('email'))
                                    <div style="color: red" class="mt-2 text-red-500 text-sm">
                                        {{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="signin-password">{{ __('Password') }}</label>
                                <input id="signin-password" name="password" type="password"
                                    class="form-control signin-password" placeholder="{{ __('Password') }}" required
                                    autocomplete="current-password">
                                @if ($errors->has('password'))
                                    <div style="color: red" class="mt-2 text-red-500 text-sm">
                                        {{ $errors->first('password') }}</div>
                                @endif
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-12">
                                        <div class="forgot-password text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log
                                    In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
        </div>
    </div>
@endsection
