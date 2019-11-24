<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Product;

class WareHouse extends Model
{
    protected $table = 'warehouses';
    
    protected $fillable = [
        'name', 'position', 'telephone', 'description'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class,'warehouse_id','id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'products_warehouses','warehouse_id','product_id');
    }

}
