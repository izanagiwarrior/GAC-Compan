<?php
    session_start();
    include "../config/conn.php";
    $account_date = $_POST['account_date'];
    $debit = $_POST['debit'];
    $credit = $_POST['credit'];
    $total_debit = $_POST['total_debit'];
    $total_credit = $_POST['total_credit'];


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO journal (account_date, debit, credit, total_debit, total_credit) VALUES ('$account_date', '$debit', '$credit', '$total_debit', '$total_credit')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/Employee/Finance/journal.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>
