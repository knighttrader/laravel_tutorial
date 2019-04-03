<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    {{-- Head Section  --}} @include('layout.head_part')
  </head>
  <body>
    {{-- Navigation Section  --}} @include('layout.nav_part')
    {{-- Header Section --}} @include('layout.header_part')

    {{-- Body Section --}} @yield('content')
    
    {{-- Footer Section --}} @include('layout.footer_part')
    {{-- Script Section --}} @include('layout.script_part')
  </body>
</html>
