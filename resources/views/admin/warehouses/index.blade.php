@extends('layouts.admin')

@section('description')
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">Tong San Pham</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouses as $warehouse)
                <tr>
                <th scope="row">{{$warehouse->id}}</th>
                <td>{{$warehouse->name}}</td>
                <td>{{$warehouse->telephone}}</td>
                <td>{{$warehouse->position}}</td>
                <td>{{count($warehouse->products)}}</td>
        
                    <td>
                    <a href="{{route('warehouses.show',[
                        'warehouse' => $warehouse
                    ])}}">
                            <button type="button" class="btn"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="{{route('warehouses.edit',[
                        'warehouse' => $warehouse
                    ])}}">
                            <button type="button" class="btn"><i class="fas fa-pencil-alt"></i></button>
                        </a>
                        <a href="{{route('warehouses.destroy',[
                            'warehouse' => $warehouse
                        ])}}">
                            <button type="button" class="btn"><i class="fas fa-trash-alt"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            <tr>
                    <td>
                        <a href="{{route('categories.create')}}">
                            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i>Create</button>
                        </a>
                    </td>
                    </tr>
        </table>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$warehouses->links()}}
            </div>
        </div>
   @endsection