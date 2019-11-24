<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <form method="post" action="{{$url}}">
        @if($warehouse->id)
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        @else
           @csrf
        @endif
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{$warehouse->name}}">
            </div>
            <div class="form-group">
                <label for="position">Dia Chi</label>
            <input type="text" class="form-control" id="position" name="position" placeholder="{{$warehouse->name}}">
            </div>
            <div class="form-group">
                <label for="telephone">SDT</label>
                <textarea class="form-control" name="telephone" id="telephone" rows="3" placeholder="{{$warehouse->description}}"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Mo Ta</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="{{$warehouse->description}}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>