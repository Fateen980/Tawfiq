@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/home') }}">Our Product</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/addProduct') }}">Add Product <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/editProduct') }}">Edit Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/deleteProduct') }}">Delete Product</a>
      </li>
    </ul>
  </div>
</nav>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


  <form>
  <div class="form-group">
    <label for="productName">Product Name</label>
    <input type="productName" class="form-control" id="productName" >
  </div>
  
  
  <div class="form-group">
    <label for="productDesc">Product Description</label>
    <textarea name="productDesc" class="form-control" id="productDesc" rows="3"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>


</form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
