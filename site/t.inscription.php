<?php 

include('model/user.php');
include('model/database.php');

$db=db_connect();

$user_username =$_POST['username'];
$user_email =$_POST['email'];
$user_password =$_POST['password'];

user_add($db, $user_username, $user_email, $user_password, 2);

session_start();

$_SESSION['username']=$_POST['username'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['priv']=2;

header('location:index.php');
?>