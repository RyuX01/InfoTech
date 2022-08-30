<?php

include('model/user.php');
include('model/database.php');

$db=db_connect();

$user_username=$_POST['username'];
$user_password=$_POST['password'];

$user = user_check($db,$user_username,$user_password);
$user = $user -> fetch(PDO::FETCH_ASSOC);

if(isset($_POST['postdata'])) {

    if ($user) {
        session_start();
        $_SESSION['id']= $user['user_id'];
        $_SESSION['username']= $user['user_username'];
        $_SESSION['id']= $user['priv_id'];

        header('location:index.php');
    }

else { 
    header('location:form_connect.php?err=1');
}
} 