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
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/addProduct') }}">Add Product <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/editProduct') }}">Edit Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/deleteProduct') }}">Delete Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>


@if (count($Products) === 0)

   No Products Found!

@endif


@foreach ($Products as $product)
<div class="card" style="width: 270px;margin: 5px">
        <img class="card-img-top" src="{{ Images::url($product->path)  }}" alt="Card image cap">
        <div class="card-block">
            <h3 class="card-title">{{ $product->name }}</h3>
            <p class="card-text">  {{ $product->desc }} </p>
           
        </div>
    </div>
@endforeach


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
