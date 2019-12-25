@extends('layouts.index')

@section('content')

    <div class="container">
        <h2>View Order Detail</h2>
        <table class="table table-hover">
            <tr>
                <th scope="col">User Name:</th>
            <td scope="col">{{$order->fullname}}</td>
            </tr>
            <tr>
                <th scope="col">Dia Chi</th>
            <td scope="col">{{$order->position}}</td>
            </tr>
            <tr>
                <th scope="col">SDT</th>
            <td scope="col">{{$order->telephone}}</td>
            </tr>
            <tr>
                <td scope="col">
                    
                    <table class="table table-hover">
                            <tr>
                                    <th scope="col">STT</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Thành Tiền</th>
                                </tr>
                            @php  $i=1; @endphp
                            @foreach($order->products as $product)
                        <tr>
                        <th scope="col">{{$i++}}</th>
                        <th scope="col">{{$product->name}}</th>
                        <th scope="col">{{$product->price}}</th>
                        <th scope="col">{{$product->count}}</th>
                        <th scope="col">{{$product->hasSell($product->count)}}</th>
                        </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <th scope="col">Ma Code</th>
                <td scope="col"> 0123456789</td>
            </tr>
            <tr>
                <th scope="col">Tong Tien</th>
            <td scope="col">{{$order->total_money}}</td>
            </tr>



        </table>
    </div>

 
@endsection