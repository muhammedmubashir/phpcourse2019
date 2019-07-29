<?php


// wamp -> wamp/www/file folder
// xampp -> htdocs/ file folder

// apache mysql server start

// ie / chrome/ firefox / safari -> localhost

// file ext -> .php

// IDE -> sublime text editor, 
// netbeans, komodo, dreamweaver, vs editor, php desginer

// ubuntu /var/www/html/

// apache, mysql, php

// mamp - mac 


// variables, constant

// data type
// variable name

// int a = 10;

// $email = "abc@hotmail.com";

// $product_name = "iphone"; // string
// $productName = 'iphone'; // string //camel notation 
// $price = 100; // integer
// $tax = 10.5; // float / decimal / double
// $passport_number = "abc00001234"; //aphanumberic

// echo $email; 

// echo $email;

// echo gettype($tax);




// type casting 
// $age = 20.6; // float / decimal / double
// $productName = "iphone"; // float / decimal / double

// echo (int)$productName;
// // $a = "abcd10.5abcd";
// $a;

// echo intval($a);



// floatval(var)

// w3schools.com html , css

// if(count($_POST))
// {
// 	echo "Name: ".$_POST['fullname']."<br>";
// 	echo "Age: ".intval($_POST['age'])."<br>";
// 	echo "Gender: ".intval($_POST['gender']);
// }


// $total_products = 58;
// $records_per_page =  10;
// $no_of_pages = $total_products / $records_per_page;
// echo $no_of_pages;
// echo "<br>".round($no_of_pages);
// echo "<br>".ceil($no_of_pages);
// echo "<br>".floor($no_of_pages);



//condition if-else switch case

// condition -> expression == === != > < >= <=
// $a = 10;
// if($a != 0)
// {
// 	echo "a is not equal to zero";
// }
// else
// {
// 	echo "a is equal to zero";

// }

//logical operators
// && ||


// && working
// T . T = T
// T . F = F
// F . T = F
// F . F = F

// || working
// T + T = T
// T + F = T
// F + T = T
// F + F = F

// if(count($_POST))
// {
// 	if($_POST['fullname'] != "")
// 	{
// 		echo "Name: ".$_POST['fullname']."<br>";
// 	}
// 	else
// 	{
// 		echo "<br>ERROR: Name Required";
// 	}
// 	if(isset($_POST['age']) && $_POST['age'] > 0)
// 	{
// 		echo "<br>Age: ".floatval($_POST['age'])."<br>";
// 	}
// 	else
// 	{
// 		echo "<br>ERROR: Age Value Required";
// 	}

// 	echo "<br>Gender: ".intval($_POST['gender']);
// }

// 10 % 2 = 0

// $a = 11;
// if($a % 2 == 0)
// {
// 	echo "a is even number";
// }
// else
// {
// 	echo "a is odd number";
// }

// // ? = Uniary operator , ternary operator

// $a = 10;
// echo ($a % 2 == 0) ? "Even number" : "Odd number";

// code complexity
// php 7.1
//laravel 
// if(count($_POST))
// {

// 	echo ($_POST['gender'] > 0) ? "Gender: ". $_POST['gender'] : "Gender: ";
// }

$product_type = "grocery";
// $product_type = "electronic";
// $product_type = "cosmetics";
// $product_type = "pharmacy";

switch ($product_type) {
	case 'grocery':
		echo "TAX value is 0%";
		break;
	
	case 'electronic':
		echo "TAX value is 10%";
		break;

	case 'cosmetics':
		echo "TAX value is 7%";
		break;
	default:
		echo "None of above";
		break;
}



?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

<form action="" method="post">
	<input type="text" name="fullname" placeholder="Name">
	<input type="text" name="age"  placeholder="Age">

	<input type="radio" name="gender" value="1"> Male
	<input type="radio" name="gender" value="2"> Female

	<input type="submit" value="Submit">
</form>
</body>
</html> -->