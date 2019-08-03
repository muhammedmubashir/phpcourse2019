<?php
//array

//index array

// $array = array(1,2,3,4,5);

// $array = [1,2,3,4,5];

// $array[] = 10;
// $array[] = 20;
// $array[] = 30;
// $array[] = 40;
// $array[] = 50;
// $array[10] = "Abdullah";
// $array[] = "Ata ur rehman";

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// echo $array[3];

// foreach ($array as $index => $value) 
// foreach ($array as $value) 
// {
// 	echo $value. "<br>";
// }


// how to reverse an array? HOME WORK



//associative array
// key value pair

// 2d array
$product_detail[0]["product_id"] = "1";
$product_detail[0]["product_name"] = "iphone 9";
$product_detail[0]["memory"] = "64 GB";
$product_detail[0]["ram"] = "1GB";
$product_detail[0]["display"] = "5inches";
$product_detail[0]["price"] = "1000";

$product_detail[1]["product_id"] = "2";
$product_detail[1]["product_name"] = "iphone 8";
$product_detail[1]["memory"] = "64 GB";
$product_detail[1]["ram"] = "1GB";
$product_detail[1]["display"] = "5inches";
$product_detail[1]["price"] = "800";

$product_detail[2]["product_id"] = "3";
$product_detail[2]["product_name"] = "iphone 7";
$product_detail[2]["memory"] = "64 GB";
$product_detail[2]["ram"] = "1GB";
$product_detail[2]["display"] = "5inches";
$product_detail[2]["price"] = "700";




foreach ($product_detail as $product) 
{
	echo "<h1>".$product['product_name']."</h1>";
	echo "<p>$".$product['price'].".00</p><br>";
}


?>