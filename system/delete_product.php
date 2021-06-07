<?php 

	include "../config/conn.php";

	$product_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM product WHERE product_id='$product_id'");
	
	
	header("location:../views/employee/production/product.php?page=2A");

?>