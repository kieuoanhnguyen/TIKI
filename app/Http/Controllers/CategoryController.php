<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function viewCategory(Category $category)
    {
       $products = $category->products()->paginate(20)->chunk(4);

       $products->toArray();
        
       return view('viewCategory',compact('category','products'));
    }

    public function viewProduct(Category $category,Product $product)
    {
       $seller = $product->seller->get();

       return view('viewProduct',compact('category','seller','product'));
    }

}
