<?php
    session_start();
    include "../config/conn.php";
    $customer = $_POST['customer'];
    $order_quantity = $_POST['order_quantity'];
    $start = $_POST['start'];
    $stop = $_POST['stop'];
    $hours = $_POST['hours'];
    $wip = $_POST['wip'];
    $finish_good = $_POST['finish_good'];
    $defect_product = $_POST['defect_product'];


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO production (customer, order_quantity, start, stop, hours, wip, finish_good, defect_product) VALUES ('$customer', '$order_quantity', '$start', '$stop', '$hours', '$wip', '$finish_good', '$defect_product')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/production.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>