@extends('layout.main')
@section('title', 'Product')

@section('content')
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>This is product list</h4>

        <ul>
          <li><a href="{{ route('product.show', 1) }}">Detail Product 1</a></li>
          <li><a href="{{ route('product.show', 2) }}">Detail Product 2</a></li>
          <li><a href="{{ route('product.show', 3) }}">Detail Product 3</a></li>
          <li><a href="{{ route('product.show', 4) }}">Detail product 4</a></li>
          <li><a href="{{ route('product.create') }}">Create Product</a></li> 
        </ul>
        
        <ul>
          <li>{{ $data["name"] }}</li>
          <li>{{ $data["age"] }}</li>
          <li>{{ $data["gender"] }}</li>
          <li>{{ $data["address"] }}</li>
        </ul>

        <ul>
          @foreach ($data as $key =>$value)
            @if($key === "age")
              @continue 
            @endif
            <li>({{ $loop->iteration }}) {{ $key }} = {{ $value }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection