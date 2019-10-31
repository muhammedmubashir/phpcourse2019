<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("hello", function(){
	return view("hello");
});

Route::get("test","home@index");
Route::get("hitview","home@hello");
Route::get("list","home@list");


Route::get("category","products@categories");
Route::get("products","products@list");

Route::get("product/details/{id}","products@details");

// Route::get("test", function(){
// 	return "HELLO Testing WORLD";
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// //listing 
Route::get("/admin/products","adminProducts@index");

// //create
Route::get("/admin/products/create","adminProducts@create");
Route::post("/admin/products/store","adminProducts@store");

//update
// Route::get("URI",Controller@action);
// Route::post("URI",Controller@action);

// //view record
// Route::post("URI",Controller@action);

// //delete record
// Route::post("URI",Controller@action);


//CRUD 

// Route::resource("/admin/products","adminProducts");