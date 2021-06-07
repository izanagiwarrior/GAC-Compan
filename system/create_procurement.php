<?php
    include "../config/conn.php";

    $procurement_id = $_POST['procurement_id'];
    $procurement_date = $_POST['procurement_date'];
    $procurement_stats = $_POST['procurement_stats'];
    $bom_id = $_POST['bom_id'];
   
    $row = $dbconnect->query("INSERT INTO procurement VALUES ('$procurement_id', '$procurement_date', '$procurement_stats', '$bom_id')");

    header("location:../views/employee/procurement/procurement.php?page=1A");
?>
