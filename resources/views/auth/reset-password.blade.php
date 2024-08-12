@extends('layouts.login.base')
@section('content')
<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="index.html">
                            <img class="logo-icon me-2" src="{{ asset('build/assets/images/app-logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">Reset Password</h2>
                    <div class="auth-form-container text-start">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                            <div class="email mb-3">
                                <label class="sr-only" for="email">{{ __('Email') }}</label>
                                <input id="email" name="email" type="email" class="form-control signin-email"
                                       placeholder="Email address" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div style="color: red;" class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="password mb-3">
                                <label class="sr-only" for="password">Password</label>
                                <input id="password" class="form-control signup-password" type="password" name="password" placeholder="Create password" required autocomplete="new-password">
                                @error('password')
                                    <div style="color: red;" class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="password mb-3">
                                <label class="sr-only" for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control signup-password" placeholder="Confirm your password" required>
                                @error('password_confirmation')
                                    <div style="color: red;" class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder"></div>
            <div class="auth-background-mask"></div>
        </div>
    </div>
</body>

@endsection
