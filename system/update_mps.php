<?php 

include "../config/conn.php";

$mps_id = $_POST['mps_id'];
$production_date = $_POST['production_date'];
$total_production = $_POST['total_production'];
$due_date = $_POST['due_date'];
$production_end = $_POST['production_end'];
$product_stats = $_POST['product_stats'];
$product_stock = $_POST['product_stock'];
$product_id = $_POST['product_id'];



$row = $dbconnect->query("UPDATE mps SET production_date='$production_date', total_production='$total_production', due_date='$due_date', 
production_end='$production_end', product_stats='$product_stats', product_id='$product_id' WHERE mps_id='$mps_id'");

header("location:../views/employee/production/mps.php?page=1A");
?>