<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipper;

class AdminShipperController extends Controller
{
    public function index()
    {
       $shippers = Shipper::paginate(20);

       return view('admin.shippers.index', compact('shippers'));
    }

    public function create()
    {
        return view('admin.shippers.edit', $this->createOrEdit(new Shipper));
    }

    public function store(Request $request)
    {
        $this->storeOrUpdate($request, new Shipper);

        return redirect()->route('shippers.index');
    }

    public function edit(Shipper $shipper)
    {
        return view('admin.shippers.edit', $this->createOrEdit($shipper));
    }

    public function update(Request $request,Shipper $shipper)
    {
        $this->storeOrUpdate($request, $shipper);

        return redirect()->route('shippers.index');
    }

    public function show(Shipper $shipper)
    {

    }

    public function createOrEdit(Shipper $shipper)
    {
         $url = $shipper->id ? route('shippers.update',compact('shipper'))
         : route('shippers.store');

         return compact('url','shipper');

    }

    public function storeOrUpdate(Request $request, Shipper $shipper)
    {
       $shipper->Fill($request->only($shipper->getFillable()));

       $shipper->password = bcrypt($request->password);

       $shipper->save();
    }
}
