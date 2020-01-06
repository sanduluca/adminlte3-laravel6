<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="AdminLTE3 and Laravel 6">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset(config('assets.plugin.font-awesome.css')) }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @yield('page-stylesheet')
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset(config('assets.plugin.overlayScrollbars.css')) }}" />
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('include.navbar3')
    @include('include.aside')
    @yield('content')
    @include('include.footer')
    @include('include.aside-control')
    
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset(config('assets.plugin.popper.js')) }}"></script>
<script src="{{ asset(config('assets.plugin.jquery.js')) }}"></script>
<script src="{{ asset(config('assets.plugin.jquery-ui.js')) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset(config('assets.plugin.bootstrap.js')) }}"></script>
<script src="{{ asset(config('assets.plugin.overlayScrollbars.js')) }}"></script>
<script src="{{ asset('js/demo.js')}}"></script>

@yield('extra-scripts')

</body>
</html>
