<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Order;

class Shipper extends Authenticatable
{
    use Notifiable;

    protected $table = 'shippers';

    protected $fillable = [
        'name', 'email', 'password', 'telephone' , 'position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'telephone' ,'position'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class,'shipper_id','id');
    }

}
