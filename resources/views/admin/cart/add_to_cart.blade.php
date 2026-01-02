@extends('admin.master')

@section('content')
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4" >
            <div class="card">
              <a href="{{ $product->link }}">
                  <img src="{{ asset('product/images/'. $product->image) }}" class="product-image" alt="">
              </a>
              <div class="card-title">{{ $product->product_name }}</div>
              <div class="card-content">
                 <p> Customize the design of your shop from over thousands of themes. No design experience or programming skills required.</p>
              </div>
              <div class="card-content">
                 <p> ${{ $product->price}}</p>
              </div>
              <a href="{{route('admin.cart',$product->id) }}">
                  <button class="btn btn-warning" style="width: 100%;">Add To Cart</button>
              </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
