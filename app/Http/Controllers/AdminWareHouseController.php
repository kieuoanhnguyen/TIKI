<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WareHouse;

class AdminWareHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = WareHouse::paginate(20);

        return view('Admin.WareHouse.index',compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.WareHouse.edit',$this->createOrEdit(new WareHouse));
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

        return redirect()->route('warehouses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(WareHouse $warehouse)
    {
        return view('Admin.WareHouse.detail',compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(WareHouse $warehouse)
    {
        return view('Admin.WareHouse.edit',$this->createOrEdit($warehouse));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WareHouse $warehouse)
    {
        $this->storeOrUpdate($request, $warehouse);

        return redirect()->route('warehouses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WareHouse $warehouse)
    {
        WareHouse::destroy($warehouse);
    }

    public function createOrEdit(WareHouse $warehouse)
    {
        $url = $warehouse->id ? route('warehouses.update',['warehouse'=>$warehouse])
        :route('warehouses.store');

        return compact('warehouse','url');
    }

    public function storeOrUpdate(Request $request, WareHouse $warehouse)
    {
        $warehouse->fill($request->only($warehouse->getFillable()));

        $warehouse->save();
    }
}
