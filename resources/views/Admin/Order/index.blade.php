<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Order</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>View Order</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ma KH</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">Ngay Mua</th>
                    <th scope="col">Ma Hoa Don</th>
                    <th scope="col">Tong Tien</th>
                    <th scope="col">Trang Thai Don</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                <th scope="row">{{$order->user->id}}</th>
                <td></td>
                <td>{{$order->telephone}}</td>
                <td>{{$order->position}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->total_money}}</td>

                <td>
                        <a href="{{route('orders.show',[
                            'order' => $order
                        ])}}">
                                <button type="button" class="btn btn-primary">View</button>
                            </a>

                            <a href="{{route('orders.destroy',[
                                'order' => $order
                            ])}}">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                </tr>
                <tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>