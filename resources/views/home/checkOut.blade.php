@extends('layouts.index')

@section('content')
<div class="row checkout">
        <div class="col-75">
          <div class="container">
          <form action="{{route('orders.store')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="name"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fullname" name="fullname" placeholder="John M. Doe">
                  <label for="telephone"><i class="fas fa-phone-alt"></i> Telphone</label>
                  <input type="text" id="telephone" name="telephone" placeholder="john@example.com">
                  <label for="position"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="position" name="position" placeholder="542 W. 15th Street">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="New York">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" id="state" name="state" placeholder="NY">
                    </div>
                    <div class="col-50">
                      <label for="zip">Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="10001">
                    </div>
                  </div>
                </div>
      
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
      
              </div>
              <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
              </label>
              <button type="submit" class="btn btn-success">Continue to checkout</button>
            </form>
          </div>
        </div>
      
        <div class="col-25">
          <div class="container">
            <h4>Cart
              <span class="price" style="color:black">
                <i class="fas fa-shopping-cart"></i>
              <b>{{Cart::session(Auth::user()->id)->getContent()->count()}}</b>
              </span>
            </h4>
            @foreach(Cart::session(Auth::user()->id)->getContent() as $item)
          <p><a href="#">@php echo(substr($item->name,0,18)) @endphp</a> <span class="price">${{$item->getPriceSum()}}</span></p>
           @endforeach
            <hr>
            <p>Total <span class="price" style="color:black"><b>${{Cart::session(Auth::user()->id)->getTotal()}}</b></span></p>
          </div>
        </div>
      </div>
@endsection