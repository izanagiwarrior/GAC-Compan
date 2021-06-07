<?php
    session_start();
    include "../config/conn.php";
    $salary_date = date("Y-m-d");
    $salary_amount = $_POST['salary_amount'];
    if ($_POST['division_id'] == '1') {
        $employee_id = $_POST['employee_prod'];
    }elseif ($_POST['division_id'] == '2') {
        $employee_id = $_POST['employee_finance'];
    }elseif ($_POST['division_id'] == '3') {
        $employee_id = $_POST['employee_proc'];
    }


    try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("INSERT INTO salary (salary_date, salary_amount, employee_id) VALUES ('$salary_date', '$salary_amount', '$employee_id')");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/employee/finance/salary.php?page=3A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
?>