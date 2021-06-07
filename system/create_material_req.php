<?php
    include "../config/conn.php";

    $request_id = $_POST['request_id'];
    $material_id = $_POST['material_id'];
    $material_amount = $_POST['material_amount'];
    $material_status = $_POST['material_status'];
       
    $row = $dbconnect->query("INSERT INTO material_request VALUES ('$request_id', '$material_id', '$material_amount', '$material_status')");

    header("location:../views/employee/production/material_request.php?page=3A");
?>