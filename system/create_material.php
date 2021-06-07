<?php
    include "../config/conn.php";

    $material_id = $_POST['material_id'];
    $material_name = $_POST['material_name'];
    $material_price = $_POST['material_price'];
    $material_stock = $_POST['material_stock'];
   
    $row = $dbconnect->query("INSERT INTO material VALUES ('$material_id', '$material_name', '$material_price', '$material_stock')");

    header("location:../views/employee/production/material.php?page=3A");
?>