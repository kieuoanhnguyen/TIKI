<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class Seller extends Model
{
    protected $table = 'sellers';

    public function orders()
    {
        return $this->hasMany(Order::class,'seller_id','id');
    }
    
    public function products()
    {
        return $this->hasMany(Product::class,'seller_id','id');
    }

}
