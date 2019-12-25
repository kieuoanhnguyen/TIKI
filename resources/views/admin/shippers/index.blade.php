@extends('layouts.admin',['url'=>'admin'])

@section('description')
<h2>View shippers</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User_name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Address</th>
            <th scope="col">List Error</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($shippers as $shipper)
        <tr>
        <th scope="row">{{$shipper->id}}</th>
        <td>{{$shipper->name}}</td>
        <td>{{$shipper->email}}</td>
        <td>{{$shipper->telephone}}</td>
        <td>{{$shipper->position}}</td>
        <td>Giao hàng trễ</td>
        @auth('shipper') 
           @if(Auth::guard('shipper')->user()->name == $shipper->name  && Auth::guard('shipper')->user()->password == $shipper->password)   
            <td>active</td>
            @else 
            <td>inactive</td>
            @endif
        @else 
        <td>inactive</td>
        @endauth
            <td class="d-flex justify-content-around">
            <a href="{{route('shippers.edit',[
                'shipper'=>$shipper,
            ])}}">
                <i class="fas fa-pencil-alt"></i>
                </a>
                
            <a href="{{route('shippers.destroy',[
                'shipper'=>$shipper,
            ])}}">
                    <i class="fas fa-trash"></i>
            </td>
        </tr>

        @endforeach
    </tbody>

<tr>
    <td>
    <a href="{{route('shippers.create')}}">
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Create</button>
        </a>
    </td>
    </tr>
</table>

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$shippers->links()}}
        </div>
    </div>
@endsection