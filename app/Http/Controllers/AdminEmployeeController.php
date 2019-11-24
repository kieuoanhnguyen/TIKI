<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(20);

        return view('Admin.Employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Employee.edit',$this->createOrEdit(new Employee));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request,new WareHouse);

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('Admin.Employee.edit',$this->createOrEdit($employee));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $this->storeOrUpdate($request,$employee);

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee);
    }

    public function createOrEdit(Employee $employee)
    {
        $url = $warehouse->id ? route('employees.update',['employee'=>$employee])
        :route('employees.store');

        return compact('employee','url');
    }

    public function storeOrUpdate(Request $request, Employee $employee)
    {
        $employee->fill($request->only($employee->getFillable()));

        $employee->warehouse_id = $request->warehouse_id;
        $employee->save();
    }
}
