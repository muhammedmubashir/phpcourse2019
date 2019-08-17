<?php

// $str = "iphone7";
// var_dump($str);

// echo $str;
// echo $str[4];

// echo substr($str, 3);
// echo substr($str, 0,-1);

// $product_ids = [3,4,6,9,1];

// echo implode(",", $product_ids);
// // "3,4,6,9,1"
// foreach ($product_ids as $value) 
// {
// 	// $ids = $ids.$value.",";
// 	$ids .= $value.",";
// }

// $ids = substr($ids,0,-1);
// echo $ids;


// $email = "muhammed@mubashir305@gmail.com";

// $r = explode("@",$email);

// echo "<pre>";
// print_r($r);
// echo "</pre>";

// $string = "my name is muhammed mubashir";
// $output = "mubashir muhammed is name my";

// $data = explode(" ",$string);
// $total_index = count($data) - 1;
// for($i = $total_index; $i >= 0; $i--)
// {
// 	echo $data[$i]." ";
// }


// regex = regular expression

//for validation purpose only
$r = filter_var('bob123@example', FILTER_VALIDATE_EMAIL);
var_dump($r);


?>