<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class File extends Model
{
    protected $table = 'files';

    public function product()
    {
        return $this->hasOne(Product::class,'image','id');
    }
}
