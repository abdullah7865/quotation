<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if(Route::currentRouteName() == 'login')
            Portal - Login
        @elseif(Route::currentRouteName() == 'register')
            Portal - Register
        @else
            Portal - Bootstrap 5 Admin Dashboard Template For Developers
        @endif
    </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('build/assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('build/assets/css/portal.css')}}">

</head>

<body>
    
</body>
</html>
