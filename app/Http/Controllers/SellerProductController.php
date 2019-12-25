<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\File;

class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::paginate(20);

       return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.edit',$this->createOrEdit(new Product));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request,new Product);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product  $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',$this->createOrEdit($product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->storeOrUpdate($request, $product);   

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function createOrEdit(Product $product)
    {
        $url = $product->id ? route('products.update',compact('product'))
        : route('products.store');

        $categories = Category::all();
        return compact('url', 'categories', 'product');
    }

    public function storeOrUpdate(Request $request, Product $product)
    {
        $product->fill($request->only($product->getFillable()));
     
      //  echo $request->category;
        $product->category_id = $request->get('category');
 
          if($request->hasFile('filename'))
          {
              foreach($request->file('filename') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $file->move(public_path().'/images/',$name);
                  $data[] = $name;
              }
 
              $file = new File;
              $file->filename = json_encode($data);
              $file->save();

              $product->image = $file->id;
          }


        //dd($product);
        //$product->seller_id = $request->get('seller_id');

        $product->save();
    }

    public function getImages(Product $product)
    {
         dd(($product->file));
    }
}
