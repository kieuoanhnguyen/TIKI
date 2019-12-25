@extends('layouts.admin') 

@section('description')

<form method="post" action="{{$url}}"" enctype="multipart/form-data"">

@if($employee->id)
{{ method_field('PUT') }}
{{ csrf_field() }}
@else 
  @csrf 
@endif


    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name',$employee->name)}}">
    </div>
    <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="{{old('telephone',$employee->telephone)}}">
    </div>
    <div class="form-group">
        <label for="position">Address</label>
        <input type="text" class="form-control" id="position" name="position" value="{{old('position',$employee->position)}}">
    </div>
    <div class="form-group">
        <label for="warehouse_id">Ware_houses</label>
        <select class="form-control" id="warehouse_id" name="warehouse_id">
            <option value="">  </option>
            @foreach($warehouses as $item)
              @if(!empty($employee->warehouse) && ($item->id === $employee->warehouse->id))
              <option value="{{$item->id}}" selected>{{$item->name}}</option>
              @else 
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$employee->description)}}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection