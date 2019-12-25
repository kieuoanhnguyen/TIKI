@extends('layouts.index')

@section('content')
    <div class="container">
        @foreach($products as $array_products)
        <div class="d-flex flex-row mt-3">
           
            @foreach($array_products as $product)
        <a href= "{{route('viewProductDetail',[
            'category'=>$product->category->slug,
            'product'=>$product
        ])}}" class="product_item" title="{{$product->name}}">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/{{$product->getImages()[0]}}" alt="" width="320px" height="300px">
                <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->price}}$</p>
                <div class="rating">
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                </div>
                <div class="">
                <a href="{{route('viewProductDetail',[
                    'category'=>$product->category->slug,
                    'product'=>$product->slug
                ])}}" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Add Cart</a>
                </div>
            </div>
        </div>
        </a>
            @endforeach
        
        </div>
        @endforeach
            
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$png_products->links()}}
            </div>
        </div>    
    </div>    
@endsection