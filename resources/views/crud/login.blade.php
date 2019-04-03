@extends('layout.crud_layout')
@section('title', 'Login Page')

@section('content')
  <div class="container">
    <br><br><br><br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-info text-white">
            <h4>Login</h4>
            {{-- @if(Session::has('message'))
              <span class="label label-success">{{ Session::get('message') }}</span>
            @endif --}}
          </div>
          <div class="card-body">
            {!! Form::open(['url' => '/login']) !!}
            <div class="form-group">
              Username: 
              {{-- @if($errors->has())
                <br>
                  <span class="text-danger">
                    {!! $errors->first('username') !!}
                  </span>
                <p></p>
              @endif --}}
              {!! Form::text('username', '', [
                'class'       => 'form-control',  
                'placeholder' => 'Masukkan Username Anda'
              ]) !!} 
            </div>
            <div class="form-group">
              Password:
              {{-- @if($errors->has())
                <br>
                  <span class="text-danger">
                    {!! $errors->first('password') !!}
                  </span>
                <p></p>
              @endif --}}
              {!! Form::password('password', [
                'class'       => 'form-control',
                'placeholder' => 'Masukkan Password Anda'
              ]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Login', [
                'class'       => 'form-control btn btn-primary'
              ]) !!}
            </div>
            <div class="form-group">
              <a href="{{ URL("register") }}" class="form-control btn btn-success">Daftar</a>
            </div>           
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@stop

