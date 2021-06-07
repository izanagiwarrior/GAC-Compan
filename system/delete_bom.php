<?php 

	include "../config/conn.php";

	$bom_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM bom WHERE bom_id='$bom_id'");
	
	
	header("location:../views/employee/production/bom.php?page=4A");

?>