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
       $png_products = $category->products()->paginate(20);
       $products = $png_products->chunk(4);

       $products->toArray();
    
       return view('home.categories',compact('category','products','png_products'));
    }

    public function viewProduct(Category $category,Product $product)
    {
       //$seller = $product->seller->get();
       $seller = "Marry";

       $related_products = $product->relationProducts();

       return view('home.products',compact('seller','category','product','related_products'));
    }

}
