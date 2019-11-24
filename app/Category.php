<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id','name', 'slug','description'
    ];

    protected $hidden = ['created_at','updated_at','deleted_at'];



    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }

    public function parent_category()
    {
        return $this->belongsTo($this,'parent_id','id');
    }

    public function child_category()
    {
        return $this->hasMany($this,'parent_id','id');
    }

}
