<?php 
	session_start();
	include "../config/conn.php";

	$receipt_id = $_GET['id'];

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("DELETE FROM receipt WHERE receipt_id='$receipt_id'");
		// use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/employee/finance/receipt.php?page=4A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>
