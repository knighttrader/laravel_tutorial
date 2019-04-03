  <nav class="nav fixed-top navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Laravel {{ App::VERSION() }} Tutorial</a>

      @if(!empty(Auth::user()->username))
        <span class="navbar-text" style="float: right; color: white;">
          Selamat datang, {{ @Auth::user()->username }} |  
          <a class="btn btn-sm btn-danger" href="{{ URL('logout') }}"> LOGOUT</a>
        </span>
      @endif
    </div>
  </nav>