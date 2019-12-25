@extends('layouts.admin')

@section('description')
        <h2>View Employees</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kho</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Danh Gia</th>
                    <th scope="col">Vi Pham</th>
                    <th scope="col">Hanh Dong</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->warehouse->name}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->telephone}}</td>
                <td>Danh Gia</td>
                <td>Vi Pham</td>
        
                    <td>
                            <td>
                                    <a href="{{route('employees.edit',[
                                      'employee'=>$employee,
                                    ])}}">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                <a href="{{route('employees.destroy',[
                                  'employee'=>$employee,
                                ])}}">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            <tr>
                    <td>
                    <a href="{{route('employees.create')}}">
                            <button type="button" class="btn btn-primary">Create</button>
                        </a>
                    </td>
                    </tr>
        </table>


        <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{$employees->links()}}
                </div>
            </div>
@endsection