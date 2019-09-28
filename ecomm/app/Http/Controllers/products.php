<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\productModel;
use App\productImageModel;


class products extends Controller
{
    function categories()
    {
    	$data['categoryList'] = categories::all();
    	$data['heading'] = "Product Categories";
    	return view("product/categories",$data);
    }

    function list()
    {
    	$productList = productModel::all();
    	return $productList;
    }

    function details($product_id)
    {
    	$data['productDetails'] = productModel::find($product_id);
    	$data['categoryList'] = categories::all();
    	// $data['productDetails'] = productModel::where([
    	// 									   ["product_id","=",$product_id],
    	// 									   ["quantity",">",1],
    										   
    	// 									  ])->get();

    	// $data['productImages'] = productImageModel::where("product_id","=",$product_id)->get();
    	$data['productImages'] = productModel::find($product_id)->images;

    	$data['heading'] = "Product Details";
    	// return $data;exit;
    	return view("product/details",$data);
    }
}
