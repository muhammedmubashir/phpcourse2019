<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
    protected $fillable = ['name','sku','description','regular_price','product_status_id'];
    public $timestamps = false;

    public function images()
    {
    	return $this->hasMany("App\productImageModel","product_id");
    }
}
