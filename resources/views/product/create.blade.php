@extends('layout.main')
@section('title', 'Create Product ID')

@section('content')
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div>

          <form action="">
            <div class="form-group">
              <label for="name">Name:</label> 
              <input type="text" name="name" class="form-control" placeholder="Name" id="name">
            </div>
            <div class="form-group">
              <label for="sku">SKU:</label>
              <input type="text" name="sku" class="form-control" placeholder="SKU" id="sku">
            </div>
            <button>Create</button>
          </form>
            
        </div>
      </div>
    </div>
  </div>
@endsection