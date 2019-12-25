<!-- Page Content -->

@extends('layouts.index')

@section('title','TIKI')
@section('navigation')
@parent
     @extends('layouts.menu',compact('categories'))
    @endsection
    <div class="space20"></div>
    <div class="">
        @section('content')
        <div class="card m-3">
            <div class="card-header" style="background-color:#337AB7; color:white;">
                <h2 style="margin-top:0px; margin-bottom:0px;">Product</h2>
            </div>
    
            <div class="card-body">

                <!-- item -->
                @foreach($products as $array_products)
                <div class="d-flex flex-row mt-3">
                   
                    @foreach($array_products as $product)
                <a href= "{{route('viewProductDetail',[
                    'category'=>$product->category->slug,
                    'product'=>$product->slug
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
               
            <!-- end item -->
    
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-outline-primary">Xem Thêm ...</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endsection
    <!-- /.row -->
    </div>

    <!-- end Page Content -->