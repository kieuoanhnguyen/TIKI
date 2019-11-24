<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Order;
use App\Seller;
use App\WareHouse;

class Product extends Model
{
    protected $table = 'products';

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

    public function hasSell($count)
    {
        return $count * $this->price;
    }
    
}
