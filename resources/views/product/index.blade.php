<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body>
      <div class="container">
        <div class="row">
          This is product list <br>

          <a href="{{ route('product.show', 1) }}">detail product1</a><br>
          <a href="{{ route('product.show', 2) }}">detail product2</a><br>
          <a href="{{ route('product.show', 3) }}">detail product3</a><br>
          <a href="{{ route('product.show', 4) }}">detail product4</a><br>
          <a href="{{ route('product.create') }}">create product</a>
        </div>
      

      </div>
    </body>
</html>
