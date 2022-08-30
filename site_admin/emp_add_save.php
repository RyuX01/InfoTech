<?php

$emp_name = $_POST['emp_name'];
$emp_lastname  = $_POST['emp_lastname'];
$emp_email  = $_POST['emp_email'];
$emp_phone  = $_POST['emp_phone'];
$emp_status  = $_POST['emp_status'];
$emp_username = $_POST['emp_username'];
$emp_password = $_POST['emp_password'];
$emp_salaire = $_POST['emp_salaire'];
$role_id = $_POST['role_id'];

include('model/database.php');
include('model/emp.php');

$db = db_connect();

emp_add($db, $emp_name, $emp_lastname, $emp_email, $emp_phone ,$emp_status, 
$emp_username, $emp_password, $emp_salaire, $role_id);

$lastInsert = emp_get_all($db);

$row =  $lastInsert -> fetch(PDO::FETCH_ASSOC);

header('location:employes_list.php');
?>
