<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    function index()
    {
    	return "Hello World From Laravel";
    }

    function hello()
    {
    	return view("hello");
    }

    function list()
    {
    	$data['heading'] = "Product Listing Page";
    	$data['productList'] = array("iPhone 11", "iPhone 10", "iPhone 9");
    	return view("product/list",$data);
    	// return view("product.list");
    }
    // function list()
    // {
    // 	$heading = "Product Listing Page";
    // 	$productList = array("iPhone 11", "iPhone 10", "iPhone 9");
    // 	// return view("product/list")->with("productList",$productList);
    // 	return view("product.list",compact("heading","productList"));
    // }
}
