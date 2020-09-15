<?php
	require_once("base.php");
	$product_name=$_REQUEST['product_name'];
	$description=$_REQUEST['description'];

	$sql = "INSERT INTO `products`(`product_name`, `description`) 
			VALUES ('$product_name','$description')";
	if ($conn->query($sql) === TRUE) {
			echo "success";
	}
	else{
			echo "error". $conn->error;
	}
?>