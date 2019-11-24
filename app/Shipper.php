<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Shipper extends Model
{
    protected $table = 'shippers';

    public function orders()
    {
        return $this->hasMany(Order::class,'shipper_id','id');
    }

}
