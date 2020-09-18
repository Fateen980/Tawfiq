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
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/addProduct') }}">Add Product <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/editProduct') }}">Edit Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/deleteProduct') }}">Delete Product</a>
      </li>
    </ul>
  </div>
</nav>



<div class="card-body">



  <form  action="" method="post" action="/updateProduct" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="form-group">
    <label for="productName">Product Name</label>
    <input type="productName" name="productName" value="{{$Product->name}}" required class="form-control" id="productName" >
  </div>
  
  
  <div class="form-group">
    <label for="productDesc">Product Description</label>
    <textarea name="productDesc" required class="form-control" id="productDesc" rows="3">{{$Product->desc}}</textarea>
  </div>


  <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Upload Image</label>
            <div class="col-sm-9">
                <input required name="image"  type="file" id="gameimageid" class="custom-file-input">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>


        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </div>


        <input type="hidden" name="id" value="{{$Product->id}}" required class="form-control" id="id" >

</form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
