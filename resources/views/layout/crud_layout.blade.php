<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    {{-- Head Section --}} @include('layout.head_part')
  </head>
  <body>  
    <nav class="nav fixed-top navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="#">Belajar CRUD di Laravel Versi. {{ App::VERSION() }} & Bootstrap</a>

        @if(!empty(Auth::user()->username))
          <span class="navbar-text" style="float: right; color: white;">
            Selamat datang, {{ @Auth::user()->username }} |  
            <a class="btn btn-sm btn-danger" href="{{ URL('logout') }}"> LOGOUT</a>
          </span>
        @endif
      </div>
    </nav>

    {{-- Body Section --}} @yield('content')
  
    <footer>
      <nav class="nav fixed-bottom navbar-expand-lg navbar-dark bg-info">
        <div class="container">
          <div class="text-white text-center">Copyright &copy; Laravel 2019</div>
        </div>
      </nav>  
    </footer>

    {{-- Script --}} @include('layout.script_part')
  </body>
</html>
