<?php
    session_start();
    include "../config/conn.php";
    $account_no = $_POST['account_no'];
    $account_name = $_POST['account_name'];
    


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO account (account_no, account_name) VALUES ('$account_no', '$account_name')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/account.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>