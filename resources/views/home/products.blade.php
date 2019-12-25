@extends('layouts.index') 

@section('content')

<div class="container">
    <div class="d-flex flex-row">
        <div class="col-4">
            <img id="myAnimation" src="/images/{{$product->getImages()[0]}}" alt="" class="myAnimation zoom">
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-center">
                <h2>{{$product->name}}</h2>
            </div>
            <div class="d-flex justify-content-center">
                <p>{{$product->price}}$</p>
            </div>
            <div class="d-flex justify-content-center">
                <p>{{$product->description}}</p>
            </div>
            <div class="">
                <form action="{{route('carts.store')}}" method="post">
                 @csrf 
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                        <i class="fas fa-plus"></i>
                </button>
                    <input type="text" name="count" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <i class="fas fa-minus"></i>
                </button>
                <button  class="btn btn-primary" type="submit"><i class="fas fa-cart-plus"></i>Add Cart</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <div class="">
        <span class="">
            <img id="01" src="/images/images.jpg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        <span class="">
            <img id="02" src="/images/images1.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        <span class="">
            <img id="03" src="/images/images2.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        <span class="">
            <img id="04" src="/images/images3.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        <span class="">
            <img id="05" src="/images/images4.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        <span class="">
            <img id="06" src="/images/images6.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
    </div>
</div>

<div class="space20"></div>
<div class="">
    <h5>Thông Số Chi Tiết</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên sản phẩm:</th>
                <td>{{$product->name}}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">NSX:</th>
                <td>{{$product->publishing}}</td>
            </tr>
            <tr>
                <th scope="col">MaKD</th>
                <td>9377923256873</td>
            </tr>
            <tr>
                <th scope="col">Lưu Y</th>
                <td>
                    @if( $product->count==0 ) {{__("sản phẩm đã hết hàng") }} @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="space20"></div>
<div class="">
    <h5>Mô Tả Sản Phẩm</h5>
    <table class="table">
        <tr>
            <td>Mô tả chi tiết về sản phẩm:</td>
        </tr>
        <tr>
            <td>
                <p>
                    {{$product->content}}
                </p>
            </td>
        </tr>
    </table>
</div>
<div class="space20"></div>
<div class="">
    <h5>Bình Luận</h5>
    <div class="well">
        <h4>Viết bình luận ...<span><i class="fas fa-pencil-alt fa-xs"></i></span></h4>
        <form class="form">
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
    <!-- Comment -->
    <div class="media m-2">
        <a class="float-left" href="#">
            <img class="mr-3" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <div class="d-flex flex-row">
                <h4 class="mx-2 mt-0">Start Bootstrap </h4>
                <small> August 25, 2014 at 9:30 PM</small>
            </div>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>

    <!-- Comment -->
    <div class="media m-2">
        <a class="float-left" href="#">
            <img class="mr-3" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <div class="d-flex flex-row">
                <h4 class="mx-2 mt-0">Start Bootstrap </h4>
                <small> August 25, 2014 at 9:30 PM</small>
            </div>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>
</div>

<div class="space20"></div>
<div class="">
    <h5>Sản Phẩm Liên Quan</h5>
    <div class="d-flex flex-row justify-content-center">
        <div class="card d-flex justify-content-center" style="width: 2rem;">
            <i class="fas fa-angle-double-left fa-2x"></i>
        </div>
        @foreach($related_products[0] as $item)
        <a href="/{{$category->id}}/{{$item->id}}" class="product_item">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/images/{{$item->getImages()[0]}}" alt="Card image cap" width="320px" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->price}}</p>
                    <div class="rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Add Cart</a>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <div class="card d-flex justify-content-center" style="width: 2rem;">
            <i class="fas fa-angle-double-right fa-2x"></i>
        </div>
    </div>
</div>
<div class="space20"></div>
<script>
    const images = ['01', '02', '03', '04', '05', '06'];
    let key;

    function showImages(id) 
    {
        const element = document.getElementById(id);
        document.getElementById("myAnimation").setAttribute('src', element.src);
    }

</script>
</div>
</div>
@endsection