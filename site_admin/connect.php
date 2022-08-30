<?php

include('model/emp.php');
include('model/database.php');

$db=db_connect();

$emp_username = $_POST['username'];
$emp_password = $_POST['password'];

$emp = emp_check ($db,$emp_username,$emp_password);
$emp = $emp -> fetch(PDO::FETCH_ASSOC);

if(isset($_POST['postdata'])) {

    if ($emp) {
        session_start();
        $_SESSION['id']= $emp['emp_id'];
        $_SESSION['username']= $emp['emp_username'];

        header('location:home.php');
    }

else { 
    header('location:index.php?err=1');
}
} 