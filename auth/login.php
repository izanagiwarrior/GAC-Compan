<?php
// activate session php
session_start();

include '../config/conn.php';


// get form data
$username = $_POST['username'];
$password = $_POST['password'];

$username_admin_production = 'prod_giesta';
$password_admin_production = '123456';

$username_admin_inventory = 'inv_sulthan';
$password_admin_inventory = '789012';

$username_admin_purchasing = 'purc_arinda';
$password_admin_purchasing = '345678';

if (($username == $username_admin_production) and ($password == $password_admin_production)) {
	$_SESSION['status'] = "login";
	$_SESSION['role'] = 'Admin';
	$_SESSION['div'] = 'production';
	$_SESSION['name'] = 'prod_giesta';
	header("location:../views/admin/home.php?page=home");
} else if (($username == $username_admin_inventory) and ($password == $password_admin_inventory)) {
	$_SESSION['status'] = "login";
	$_SESSION['role'] = 'Admin';
	$_SESSION['div'] = 'inventory';
	$_SESSION['name'] = 'inv_sulthan';
	header("location:../views/admin/home.php?page=home");
} else if (($username == $username_admin_purchasing) and ($password == $password_admin_purchasing)) {
	$_SESSION['status'] = "login";
	$_SESSION['role'] = 'Admin';
	$_SESSION['div'] = 'purchasing';
	$_SESSION['name'] = 'purc_arinda';
	header("location:../views/admin/home.php?page=home");
} else {
	// select data that match with input
	$row = $dbconnect->query("SELECT * FROM employee INNER JOIN division ON employee.division_id = division.division_id WHERE username = '$username' and password = '$password';");

	// get data
	$data = $row->fetch();

	if ($row->rowCount() > 0) {
		$_SESSION['name'] = $data['name'];
		$_SESSION['division'] = $data['division_name'];
		$_SESSION['status'] = "login";
		header("location:../views/employee/" . $_SESSION['division'] . "/home.php?page=home");
	} else {
		header("location:../views/login.php?message=failed");
	}
}
