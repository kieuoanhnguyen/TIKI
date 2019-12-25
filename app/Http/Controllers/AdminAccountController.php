<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Role;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Admin::paginate(20);

        return view('admin.accounts.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.edit',$this->createOrEdit(new Admin));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request,new Admin);

        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $account)
    {
        return view('admin.accounts.edit',$this->createOrEdit($account));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $account)
    {
        $this->storeOrUpdate($request,$account);

        return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $account)
    {
        //
    }

    public function createOrEdit(Admin $account)
    {
        $url = $account->id ? route('accounts.update',compact('account'))
        : route('accounts.store');
        $roles = Role::all();

        return compact('url', 'roles', 'account');
    }

    public function storeOrUpdate(Request $request, Admin $account)
    {
        $account = $account->Fill($request->only($account->getFillable()));
 
        $account->password = bcrypt($request->password);
        
        $account->save();

        $account->roles()->sync($request->roles);

        //$account->save();
    }
}
