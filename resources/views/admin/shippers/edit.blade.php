@extends('layouts.admin',['url'=>'admin'])

@section('description')
            <form method="post" action="{{$url}}">
                @if($shipper->id)
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                @else 
                   @csrf
                @endif   
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name"  name= "name" value="{{old('name',$shipper->name)}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name= "email" value="{{old('email',$shipper->email)}}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name= "password">
                </div>
        
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" id="position"  name= "position" value="{{old('position',$shipper->position)}}">
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" class="form-control" id="telephone"  name= "telephone" value="{{old('telephone',$shipper->telephone)}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    @endsection