<?php 

include "../config/conn.php";

$material_id = $_POST['material_id'];
$material_name = $_POST['material_name'];
$material_price = $_POST['material_price'];
$material_stock = $_POST['material_stock'];

$row = $dbconnect->query("UPDATE material SET material_name='$material_name', material_price='$material_price', material_stock='$material_stock' WHERE material_id='$material_id'");

header("location:../views/employee/procurement/material.php?page=2A");
?>