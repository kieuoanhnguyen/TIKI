@extends('layouts.admin')

@section('description')
    <form method="post" action="{{$url}}">
        @if($warehouse->id)
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        @else
           @csrf
        @endif
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$warehouse->name)}}">
            </div>
            <div class="form-group">
                <label for="position">Dia Chi</label>
            <input type="text" class="form-control" id="position" name="position" value="{{old('position',$warehouse->position)}}">
            </div>
            <div class="form-group">
                <label for="telephone">SDT</label>
                <input class="form-control" name="telephone" id="telephone" type="text" value="{{old('telephone',$warehouse->telephone)}}">
            </div>
            <div class="form-group">
                <label for="description">Mo Ta</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{old('description',$warehouse->description)}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    @endsection