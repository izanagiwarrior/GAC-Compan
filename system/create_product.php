<?php
    include "../config/conn.php";

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_stock = $_POST['product_stock'];
    $bom_id = $_POST['bom_id'];
   
    $row = $dbconnect->query("INSERT INTO product VALUES ('$product_id', '$product_name', '$product_stock', '$bom_id')");

    header("location:../views/employee/production/product.php?page=2A");
?>