@extends('layouts.admin')

@section('description')
            <h2>View Auths</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User_Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Business_code</th>
                        <th scope="col">Violate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sellers as $seller)
                    <tr>
                    <th scope="row">{{$seller->id}}</th>
                    <td>{{$seller->name}}</td>
                    <td>{{$seller->email}}</td>
                    <td>{{$seller->telephone}}</td>
                    <td>{{$seller->business_code}}</td>
                        <td><p>Bán hàng giả,hàng kém chất lượng</p></td>
                       
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
                        {{$sellers->links()}}
                    </div>
                </div>
       
        @endsection