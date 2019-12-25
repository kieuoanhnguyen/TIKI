@extends('layouts.admin')

@section('description')
            <h2>View Auths</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User_Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Order Delete</th>
                        <th scope="col">Violate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>Don hang bi huy</td>
                        <td>Huy qua nhieu don hang</td>
                        <td>
                            <a href="#">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    
            <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{$users->links()}}
                    </div>
            </div>
       
        @endsection