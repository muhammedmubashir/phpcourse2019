<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";

    public function images()
    {
    	return $this->hasMany("App\productImageModel","product_id");
    }
}
