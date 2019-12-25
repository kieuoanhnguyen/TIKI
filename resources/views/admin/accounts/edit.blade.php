@extends('layouts.admin',['url'=>'admin'])

@section('description')
            <form method="post" action="{{$url}}">
                @if($account->id)
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                @else 
                   @csrf
                @endif   
                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name= "name" value="{{old('name',$account->name)}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name= "email" value="{{old('email',$account->email)}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name= "password">
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select class="form-control" id="roles" name="roles" >
                        @foreach($roles as $role )
                        @if(!empty($account->roles) && ($account->roles[0]->id === $role->id) )
                        <option value="{{$role->id}}" selected>{{$role->name}}</option>
                        @else 
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endif
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    @endsection