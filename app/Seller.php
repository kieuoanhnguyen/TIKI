<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Order;
use App\Product;

class Seller extends Authenticatable
{
    use Notifiable;

    protected $table = 'sellers';
    
    protected $fillable = [
        'name', 'email', 'password','business_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','business_code'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class,'seller_id','id');
    }
    
    public function products()
    {
        return $this->hasMany(Product::class,'seller_id','id');
    }

}
