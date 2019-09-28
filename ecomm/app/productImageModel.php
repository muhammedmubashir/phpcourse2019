<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productImageModel extends Model
{
    protected $table = "product_images";
    protected $primaryKey = "pi_id";

    public function products()
    {
    	return $this->belongsTo("App\productModel","product_id");
    }
}
