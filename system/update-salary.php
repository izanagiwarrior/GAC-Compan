<?php 
	session_start();
	include "../config/conn.php";

	$salary_id = $_POST['salary_id'];
	$salary_date = $_POST['salary_date'];
	$salary_amount = $_POST['salary_amount'];
	$employee_name = $_POST['employee_name'];
	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("UPDATE salary SET salary_date='$salary_date', salary_amount='$salary_amount', employee_name='$employee_name' WHERE salary_id='$salary_id'");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/employee/finance/salary.php?page=2A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
	
?>