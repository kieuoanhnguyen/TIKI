@extends('layouts.admin')

@section('description')
<h2>View Categories</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Parent_Category_Name</th>
            <th scope="col">Page</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
            <td>{{$category->parent_category['name']}}</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
            <a href="{{route('categories.edit',[
                'category'=>$category,
            ])}}">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            <a href="{{route('categories.destroy',[
                'category'=>$category,
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

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$categories->links()}}
        </div>
    </div>
@endsection