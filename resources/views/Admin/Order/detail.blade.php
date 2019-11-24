<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Order Detail</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>View Order Detail</h2>
        <table class="table table-hover">
            <thead>
                @if($order != null)
                <tr>
                    <th scope="col">Ma Khach Hang</th>
                    <td >{{$order->user->id}}</td>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <td>{{$order->user->name}}</td>
                </tr>
                <tr>
                    <th scope="col">Dia Chi</th>
                    <td>{{$order->user->position}}</td>
                </tr>
                <tr>
                    <th scope="col">So Dien Thoai</th>
                    <td>{{$order->user->telephone}}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Danh Sach San Pham<th>
                </tr>
                <tr>      
                    <td>          
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ma San Pham</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gia</th>
                                        <th scope="col">So Luong</th>
                                        <th scope="col">Thanh Tien</th>
                                        <th scope="col">Thoi Gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->products as $product)
                                    <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{count($order->products)}}</td>
                                    <td>{{$product->hasSell}}</td>
                                    <td>{{$product->received_date}}
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </td>
                </tr>
            </tbody>
            <tr>
                <th scope="col">Ma Code</th>
            <td scope="col">{{$order->discount->id}}</td>
            </tr>
            <tr>
                <th scope="col">Tong Tien</th>
                <td scope="col">200 000</td>
            </tr>
            @endif
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>