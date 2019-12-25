@extends('layouts.admin')

@section('description')
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <td >{{$warehouse->id}}</td>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <td>{{$warehouse->name}}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Danh Sach San Pham<th>
                </tr>
                <tr>      
                    <td>          
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ma San Pham</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gia</th>
                                        <th scope="col">So Luong</th>
                                        <th scope="col">Thanh Tien</th>
                                        <th scope="col">Thoi Gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($warehouse->products as $product)
                                    <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{count($product->orders)}}</td>
                                    <td>{{$product->hasSell}}</td>
                                    <td>{{$product->received_date}}
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </td>
                </tr>
            </tbody>
        </table>
 @endsection