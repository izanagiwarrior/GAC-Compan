<?php 

include "../config/conn.php";

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$bom_id = $_POST['bom_id'];

$row = $dbconnect->query("UPDATE product SET product_name='$product_name', product_demand='$product_demand', bom_id='$bom_id' WHERE product_id='$product_id'");

header("location:../views/employee/production/product.php?page=2A");
?>