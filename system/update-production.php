<?php
session_start();
include "../config/conn.php";

$id = $_POST['id'];
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
  $row = ("UPDATE production SET customer='$customer', order_quantity='$order_quantity', start='$start', stop='$stop', hours='$hours', wip='$wip', finish_good='$finish_good', defect_product='$defect_product' WHERE id='$id'");
  // use exec() because no results are returned
  $dbconnect->exec($row);
  echo "New record created successfully";
  header("location:../views/admin/production.php?page=1A");
} catch (PDOException $e) {
  echo $row . "<br>" . $e->getMessage();
}

$dbconnect = null;
