<?php 

	include "../config/conn.php";

	$mps_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM mps WHERE mps_id='$mps_id'");
	
	
	header("location:../views/employee/production/mps.php?page=1A");

?>