<?php
    include "../config/conn.php";

    $mps_id = $_POST['mps_id'];
    $production_date = $_POST['production_date'];
    $total_production = $_POST['total_production'];
    $due_date = $_POST['due_date'];
    $production_end = $_POST['production_end'];
    $product_stats = $_POST['product_stats'];
    $product_id = $_POST['product_id'];


    $data              =$dbconnect->query("SELECT * FROM material WHERE material_id=2");
    $stock_material    =$data->fetch(PDO::FETCH_BOTH);
    $stock             =$stock_material ['material_stock'];

    if ($stock < ($total_production*10)) {

       header("location:../views/employee/production/create_mps.php?message=failed");

    }
    else{
        $row = $dbconnect->query("INSERT INTO mps VALUES ('$mps_id', '$production_date', '$total_production', '$due_date', '$production_end', '$product_stats', '$product_id')");
        header("location:../views/employee/production/mps.php?page=1A");

    }

?>