<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;

class Admin extends  Authenticatable
{
    use Notifiable;
  
    protected $guard_name = 'admin';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    
       protected $table = 'admins';
    
    public function roles()
    {
        return $this->morphToMany(Role::class,'model','model_has_roles');
    }
    
}
