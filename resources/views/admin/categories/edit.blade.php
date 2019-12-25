@extends('layouts.admin')

@section('description')
            <form method="post" action="{{$url}}">
                @if($category->id)
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                @else 
                   @csrf
                @endif   
                <div class="form-group">
                    <label for="name">Category_Name</label>
                <input type="text" class="form-control" id="name"  name= "name" value="{{old('name',$category->name)}}">
                </div>
                <div class="form-group">
                    <label for="parent_category">Parent_Category_Name</label>
                    <select class="form-control" id="parent_category" name="parent_category" >
                      <option value=""></option>
                    @foreach($categories as $item)
                      @if(!empty($category->parent_category) && $category->parent_category->id === $item->id)
                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                      @else 
                        <option value="{{$item->id}}">{{$item->name}}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$category->description)}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    @endsection