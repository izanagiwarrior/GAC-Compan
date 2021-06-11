<?php
session_start();
include "../config/conn.php";
if ($_SESSION['div'] != 'inventory') {
  header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}
$id = $_GET['id'];


try {
  // set the PDO error mode to exception
  $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $row = ("DELETE FROM inventory WHERE id='$id'");
  // use exec() because no results are returned
  $dbconnect->exec($row);
  echo "New record created successfully";
  header("location:../views/admin/inventory.php?page=3A");
} catch (PDOException $e) {
  echo $row . "<br>" . $e->getMessage();
}

$dbconnect = null;
