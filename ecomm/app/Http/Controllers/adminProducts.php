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

    // function show()
    // {

    // }

    function create()
    {
    	//create form for products
        return view("admin/products/create");
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'A title is required',
    //         'body.required'  => 'A message is required',
    //     ];
    // }



    function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|max:255|email',
        'sku' => 'required',
        'price' => 'required',
        ]);

        $postedData = $request->all();
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

    // function edit()
    // {
    // 	//show form with existing values
    // }

    // function update()
    // {
    // 	//update with new values
    // }

    function destroy()
    {
    	//delete the record
    }

}
