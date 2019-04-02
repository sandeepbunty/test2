<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @include('layouts.includes.header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.includes.nav')
    <aside class="main-sidebar">
    @include('layouts.includes.sidebar')
    </aside>
    <div class="content-wrapper">
            @yield('content')
    </div>
</div>
    @include('layouts.includes.footer')
    @yield('script')
</body>
</html>
