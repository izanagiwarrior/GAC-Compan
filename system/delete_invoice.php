<?php 

	include "../config/conn.php";

	$transaction_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM procurement_transaction WHERE transaction_id='$transaction_id'");
	
	
	header("location:../views/employee/procurement/invoice.php?page=5A");

?>