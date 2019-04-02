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
<body class="hold-transition login-page">
    <div id="app">
      <div class="login-box">
        <div class="login-logo">
          <a href="/"><b>Admin</b>LTE</a>
        </div>

            @yield('content')
            <!-- /.login-box-body -->
      </div>
    </div>
    @include('layouts.includes.footer')
</body>
</html>
