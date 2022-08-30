<?php 

include('model/emp.php');
include('model/database.php');

$db=db_connect();

$emp_username =$_POST['username'];
$emp_email =$_POST['email'];
$emp_password =$_POST['password'];

emp_add($db, $emp_username, $emp_email, $emp_phone ,$emp_status, $emp_password, $emp_salaire, $role_id);

session_start();

$_SESSION['username']=$_POST['username'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];

header('location:index.php');
?>