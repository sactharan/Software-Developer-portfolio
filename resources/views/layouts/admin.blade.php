<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Portofolio') }}</title>

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <!-- Animation library for notifications   -->

    <link href="{{ asset('admin/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        @include('layouts.inc.admin.sidebar')
        <div class="main-panel">
            @include('layouts.inc.admin.navbar')

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{ asset('admin/js/demo.js') }}"></script>

    @yield('scripts')


    @livewireScripts

    @stack('script')
</body>

</html>
