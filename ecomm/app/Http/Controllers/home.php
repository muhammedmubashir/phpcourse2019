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
}
