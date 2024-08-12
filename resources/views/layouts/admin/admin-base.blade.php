<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.admin.partials.css')

</head>

<body class="app">
    <header class="app-header fixed-top">

        @include('layouts.admin.partials.header')
        @include('layouts.admin.partials.sidepanel')

    </header>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

               @yield('content')

            </div>
        </div>

       @include('layouts.admin.partials.footer')

    </div>


   @include('layouts.admin.partials.script')

</body>

</html>
