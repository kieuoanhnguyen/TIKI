<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\WareHouse;
use App\Order;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
       'name' , 'position' , 'telephone'
    ];
    
    public function warehouse()
    {
        return $this->belongsTo(WareHouse::class,'warehouse_id','id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'employee_id','id');
    }
}
