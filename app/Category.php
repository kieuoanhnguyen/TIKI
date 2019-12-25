<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Product;

class Category extends Model
{
    use HasSlug;

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

    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
