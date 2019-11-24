<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Product;
use App\Shipper;
use App\Seller;
use App\User;
use App\Discount;

class Order extends Model
{
    protected $table = 'orders';
    
    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class,'shipper_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class,'seller_id','id');
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class,'orders_products','order_id','product_id');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class,'discount_id','id');
    }


}
