@extends('layouts.admin',['url'=>'admin'])

@section('description')
<h2>View Accounts</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User_name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
        <th scope="row">{{$account->id}}</th>
        <td>{{$account->name}}</td>
        <td>{{$account->email}}</td>
        <td>
            @foreach($account->roles as $role)
            <p>{{$role->name}}</p>
            @endforeach
        </td>
        @auth('admin') 
           @if(Auth::guard('admin')->user()->name != $account->name||Auth::guard('admin')->user()->password != $account->password)   
            <td>inactive</td>
            @else 
               <td>active</td>
            @endif
        @else 
        <td>inactive</td>
        @endauth
            <td>
            <a href="{{route('accounts.edit',[
                'account'=>$account,
            ])}}">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            <a href="{{route('accounts.destroy',[
                'account'=>$account,
            ])}}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>

        @endforeach
    </tbody>

<tr>
    <td>
    <a href="{{route('accounts.create')}}">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </td>
    </tr>
</table>

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$accounts->links()}}
        </div>
    </div>
@endsection