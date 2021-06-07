<?php
    session_start();
    include "../config/conn.php";
    $receipt_date = date('Y-m-d');
    $receipt_desc = $_POST['receipt_desc'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_amount = $quantity*$price;
    $transaction_id = $_POST['transaction_id'];


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO receipt (receipt_date, receipt_desc, quantity, price, total_amount, transaction_id) VALUES ('$receipt_date', '$receipt_desc', '$quantity', '$price', '$total_amount', '$transaction_id')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/employee/finance/receipt.php?page=4A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>