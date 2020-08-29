<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="msapplication-tap-highlight" content="no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($pageTitle) ? config('app.name').$pageTitle : config('app.name')." - Dashboard" }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('backend')}}/fonts/fontawesome/css/fontawesome-all.css">
    {{-- Custom Styles --}}
    {{-- <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables/datatables.min.css"> --}}
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables/dataTables.bootstrap4.min.css">
    <link href="{{asset('backend')}}/main.css" rel="stylesheet">
</head>

<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @auth

        @include('layouts.includes.backend.header')
        @endauth

        @yield('content')

    </div>
    <script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('backend')}}/scripts/main.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/datatables.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    @stack('js')
</body>

</html>
