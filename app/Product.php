<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Category;
use App\Order;
use App\Seller;
use App\WareHouse;
use App\File;

class Product extends Model
{
    use HasSlug;

    protected $table = 'products';

    protected $fillable = [
      'name', 'auther', 'publishing', 'price', 'count', 'content', 'description'
    ];

    protected $hidden =[
       'created_at','deleted_at','updated_at'
    ];
    public function orders()
    {
        return $this->belongsToMany(Order::class,'orders_products','product_id','order_id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class,'seller_id','id');
    }
  
    public function warehouses()
    {
        return $this->belongsToMany(WareHouse::class,'products_warehouses','product_id','warehouse_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function file()
    {

        return $this->belongsTo(File::class,'image','id');
    }

    public function getImages()
    {
        if(!empty($this->file))
           return json_decode($this->file->filename);
    }

    public function hasSell($count)
    {
        return $count * $this->price;
    }

    public function relationProducts()
    {
        $category = $this->category;
       
        $products = $category->products->chunk(4);

        return $products;
    }

    public function getSlugOptions():SlugOptions
    {
       return SlugOptions::create()
        ->generateSlugsFrom('name')
        ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
