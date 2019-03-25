<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>

    @include('layout.head_part')



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    {{-- @stack('styles') --}}

  </head>
  <body>

    @include('layout.nav_part')
    @include('layout.header_part')
    <div class="container">
        <div class="content">
                @yield('appContent')
        </div>
    </div>
    @include('layout.footer_part')
    @include('layout.script_part')

  </body>
</html>
