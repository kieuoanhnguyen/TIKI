<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order;

class Discount extends Model
{
    protected $table = 'discounts';

    public function users()
    {
        return $this->belongsToMany(User::class,'users_discounts','discount_id','user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'discount_id','id');
    }
}
