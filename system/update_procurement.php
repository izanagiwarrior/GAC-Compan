<?php 

include "../config/conn.php";

$procurement_id = $_POST['procurement_id'];
$procurement_date = $_POST['procurement_date'];
$procurement_stats = $_POST['procurement_stats'];
$bom_id = $_POST['bom_id'];



$row = $dbconnect->query("UPDATE procurement SET procurement_date='$procurement_date', 
procurement_stats='$procurement_stats', bom_id='$bom_id' WHERE procurement_id='$procurement_id'");

header("location:../views/employee/procurement/procurement.php?page=1A");
?>