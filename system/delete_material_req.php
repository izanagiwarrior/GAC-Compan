<?php 

	include "../config/conn.php";

	$request_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM material_request WHERE request_id='$request_id'");
	
	
	header("location:../views/employee/production/material_request.php?page=3A");

?>