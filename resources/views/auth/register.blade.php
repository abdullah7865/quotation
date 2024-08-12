@extends('layouts.login.base')
@section('content')
<body class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2"
                                src="build/assets/images/app-logo.svg" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form method="POST" action="{{ route('register') }}" class="auth-form auth-signup-form">
                            @csrf

                            <!-- Name -->
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-name">Your Name</label>
                                <input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Full name" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <div class="mt-2 text-red-500 text-sm">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <!-- Email -->
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Your Email</label>
                                <input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div style="color: red" class="mt-2 text-red-500 text-sm">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password">Password</label>
                                <input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Create a password" required>
                                @if ($errors->has('password'))
                                    <div style="color: red" class="mt-2 text-red-500 text-sm">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <!-- Confirm Password -->
                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password-confirmation">Confirm Password</label>
                                <input id="signup-password-confirmation" name="password_confirmation" type="password" class="form-control signup-password" placeholder="Confirm your password" required>
                                @if ($errors->has('password_confirmation'))
                                    <div style="color: red" class="mt-2 text-red-500 text-sm">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                            </div>
                        </form>
                        <div class="auth-option text-center pt-5">Already have an account? <a class="text-link"
                                href="{{route ('login')}}">Log in</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
