<?php
    include "../config/conn.php";

    $bom_id = $_POST['bom_id'];
    $material_required = $_POST['material_required'];
    $material_id = $_POST['material_id'];
   
    $row = $dbconnect->query("INSERT INTO bom VALUES ('$bom_id', '$material_required', '$material_id')");

    header("location:../views/employee/production/bom.php?page=4A");
?>