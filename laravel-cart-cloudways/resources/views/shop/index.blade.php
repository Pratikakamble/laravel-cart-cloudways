@extends('layouts.app')

@section('content')

<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shop
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="container">
    <div class="row">
          @foreach($products as $product)
          <div class="col-lg-3">
            <img 
            src="{{ asset($product->image_path) }}" 
            style="height:200px !important;">
            <h5>{{ $product->name }}</h5>
            <p>{{ substr($product->details, 0, 30).'...' }}</p>
            <p><b>Price: <span class="text-red-500">$ {{ number_format($product->price, 2) }}</b></p>
            <a  href="/shop/{{$product->id}}"><button class="btn btn-primary">Read More...</button></a>
          </div>
          @endforeach
    </div>
</div>
@endsection