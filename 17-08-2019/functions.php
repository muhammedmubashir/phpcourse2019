<?php


//functions

// object oriented programming -> class, inheritance, encapsulation, polymorhpism



// function functionName($param1,$param2,$param3)
// {

// }


// function test1()
// {
// 	echo "hello world";
// }

// function test2()
// {
// 	return "hello world";
// }

// function test3($a,$b)
// {
// 	echo $a." ".$b;
// }

// function test4($a,$b)
// {
// 	return $a+$b;
// }




// function getAllProductsByCategoryID($category_id)
// {
// 	$sql = "select * from products where category_id = $category_id";
// 	// $result = records_fetch();
// 	$result = [];
// 	return $result;
// }

// $product_list = getAllProductsByCategoryID(10);
// print_r($product_list);



//optional parameter 
function add($a,$b=0)
{
	return $a+$b;
}

echo add(10,20);
// echo add(10);


?>