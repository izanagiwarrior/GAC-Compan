<?php
    session_start();
    include "../config/conn.php";
    if ($_SESSION['div'] != 'purchasing') {
      header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
    }
    $date = $_POST['date'];
    $material_name = $_POST['material_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO purchasing (date, material_name, quantity, price,status) VALUES ('$date', '$material_name', '$quantity', '$price', '$status')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/purchasing.php?page=2A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
