<?php
    session_start();
    include "../config/conn.php";
    $product_name = $_POST['product_name'];
    $stock = $_POST['stock'];
    $received_date = $_POST['received_date'];
    $status = $_POST['status'];
    $stored = $_POST['stored'];


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO inventory (product_name, stock, received_date,status,stored) VALUES ('$product_name', '$stock', '$received_date', '$status', '$stored')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/inventory.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>