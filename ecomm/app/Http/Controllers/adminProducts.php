<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;

class adminProducts extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    function index()
    {
    	//listing of all products
    	$data['products'] = productModel::all();
    	return view("admin/products/list",$data);

    }

    function create()
    {
    	//create form for products
        return view("admin/products/create");
    }

    function store(Request $request)
    {
    	$postedData = $request->validate([
        'name' => 'required|unique:posts|max:255',
        'price' => 'required',
        ]);
        // $postedData = $r->all();
        // echo $r->get("name");
        
        $prodct = new productModel;
        
        $prodct['name'] = $postedData['name'];
        $prodct['sku'] = $postedData['sku'];
        $prodct['description'] = $postedData['description'];
        $prodct['regular_price'] = $postedData['price'];
        $prodct['product_status_id'] = 1;
        $prodct->save();
        
        prodctModel::all()->images;
        // $productImages = new productImageModel;
        // $prodctid = $prodct->id;

        return redirect("admin/products")->with("status","Record Saved Successfully");
        
    }

    function edit()
    {
    	//show form with existing values
    }

    function update()
    {
    	//update with new values
    }

    function delete()
    {
    	//delete the record
    }

}
