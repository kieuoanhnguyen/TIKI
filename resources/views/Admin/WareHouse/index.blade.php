<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View WareHouse</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">Tong San Pham</th>
                    <th scope="col">Tong So Luong San Pham</th>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouses as $warehouse)
                <tr>
                <th scope="row">{{$warehouse->id}}</th>
                <td>{{$warehouse->name}}</td>
                <td>{{$warehouse->telephone}}</td>
                <td>{{$warehouse->position}}</td>
                <td>{{count($warehouse->products)}}</td>
        
                    <td>
                    <a href="{{route('warehouses.show',[
                        'warehouse' => $warehouse
                    ])}}">
                            <button type="button" class="btn btn-primary">View</button>
                        </a>
                        <a href="{{route('warehouses.edit',[
                        'warehouse' => $warehouse
                    ])}}">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                        <a href="{{route('warehouses.destroy',[
                            'warehouse' => $warehouse
                        ])}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            <tr>
                    <td>
                        <a href="{{route('categories.create')}}">
                            <button type="button" class="btn btn-primary">Create</button>
                        </a>
                    </td>
                    </tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>