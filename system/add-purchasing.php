<?php
    session_start();
    include "../config/conn.php";
    $date = $_POST['date'];
    $material_name = $_POST['material_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO purchasing (date, material_name, quantity, price) VALUES ('$date', '$material_name', '$quantity', '$price')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/purchasing.php?page=2A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>