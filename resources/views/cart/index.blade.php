@extends('layouts.index') 

@section('content')

<div class="shopping-cart">
    <!-- Title -->
    <div class="title">
        <h2> Shopping Bag</h2>
    </div>
    <div>
    @auth    
            <h5>{{Cart::session(Auth::user()->id)->getContent()->count()}} item(s) in your cart</h5>
        </div>
    @foreach(Cart::session(Auth::user()->id)->getContent() as $item)
      <!-- Product  -->
    <div class="item">
        <div class="buttons">
          <a href="{{route('carts.destroy',[
              'cart' => $item->id
          ])}}" ><span class="delete-btn"><i class="fas fa-trash-alt"></i></span></a>
            <span class="like-btn"><i class="fas fa-heart"></i></span>
        </div>

        <div class="image">
        <img src="/images/{{$item->attributes['image']}}" alt="" />
        </div>

        <div class="description">
        <span>{{$item->name}}</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <i class="fas fa-plus"></i>
        </button>
    <input type="text" name="count" value="{{$item->quantity}}">
            <button class="minus-btn" type="button" name="button">
                <i class="fas fa-minus"></i>
        </button>
        </div>

    <div class="total-price">${{$item->getPriceSum()}}</div>
    </div>
@endforeach
@endauth
<div class="d-flex justify-content-center mt-3">
<a href="{{route('checkout')}}" class="btn btn-success">
        Check Out
</a>
</div>
</div>

@endsection