<?php
	require_once("base.php");
	$sql="SELECT * FROM `products` WHERE 1";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) { 
		echo $row["id"]." | ".$row["product_name"]." | ".$row["description"]." | ".$row["created_at"]." | ".'<br>';
	}

?>