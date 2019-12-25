<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $url = '';
        
        $products = Product::paginate(20)->chunk(4);

        $categories = Category::all();

        return view('home.index',compact('products', 'url', 'categories'));
    }

    public function search(Request $request)
    {
        $keyword = $request->query('q');
        
        $category = Category::where('name','LIKE',"%{$keyword}%")->select('id','slug')->get();
  
        $png_products = Product::where('name','LIKE',"%{$keyword}%")
                    ->orWhere('description','LIKE',"%{$keyword}%")
                    ->orWhere('content','LIKE',"%{$keyword}%")
                    ->orWhere(function($query) use ($category) {
                        $category->isEmpty() ? 
                        :$query->whereIn('category_id',$category->pluck('id'));
                     })->paginate(20);
                     
        $products= $png_products -> chunk(4);

        return view('home.search',compact('keyword', 'category','products', 'png_products'));         
    }
}
