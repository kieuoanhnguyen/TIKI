@extends('layouts.admin')
   
@section('description')
<form method="post" action="{{$url}}" enctype = "multipart/form-data">
    @if($product->id)
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @else 
    @csrf
    @endif
                <div class="form-group">
                    <label for="name">Product_Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{old('name',$product->name)}}" value="{{old('name',$product->name)}}">
                </div>

                <div class="form-group">
                    <label for="category">Category_Name</label>
                <select class="form-control" id="category" name="category" >
                    <option value=" "> </option>
                    @foreach($categories as $category)
                       @if( !empty($product->category) && ($category->id === $product->category->id) )
                       <option value="{{$category->id}}" selected>{{$category->name}}</option>
                       @else 
                       <option value="{{$category->id}}">{{$category->name}}</option>
                       @endif
                    @endforeach
                      </select>
                </div>

                <div class="form-group">
                    <label for="auther">Auther</label>
                <input type="text" class="form-control" id="auther" name="auther" value="{{old('auther',$product->auther)}}">
                </div>

                <div class="form-group">
                    <label for="publishing">NXB</label>
                    <input type="text" class="form-control" id="publishing" name="publishing"  value="{{old('publishing',$product->publishing)}}">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price"  value={{old('price',$product->price)}}>
                </div>

                <div class="form-group">
                    <label for="count">Count</label>
                    <input type="number" name="count" id="count" class="form-control" value={{old('count',$product->count)}}></br>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$product->description)}}</textarea>
                </div>
               
                <div class="form-group">
                    <label>Image</label>
                    <input name="filename[]" type="file" class="form-control" multiple="true" ></br>
                </div>
               
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{old('content',$product->content)}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

@endsection