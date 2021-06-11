<?php
session_start();
include "../config/conn.php";
if ($_SESSION['div'] != 'inventory') {
    header("location: ../" . $_SESSION['role'] . "/home.php?page=home");
}

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$stock = $_POST['stock'];
$received_date = $_POST['received_date'];
$status = $_POST['status'];
$stored = $_POST['stored'];


try {
    // set the PDO error mode to exception
    $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $row = ("UPDATE inventory SET product_name='$product_name', stock='$stock', received_date='$received_date', stored='$stored', status='$status' WHERE id='$id'");
    // use exec() because no results are returned
    $dbconnect->exec($row);
    echo "New record created successfully";
    header("location:../views/admin/inventory.php?page=3A");
} catch (PDOException $e) {
    echo $row . "<br>" . $e->getMessage();
}

$dbconnect = null;
