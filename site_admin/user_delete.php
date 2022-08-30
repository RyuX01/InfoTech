<?php

include('model/database.php');
include('model/user.php');

$db = db_connect();

$id = $_GET['id_sent'];
$user = user_delete_one($db, $id);

header('location:user_list.php');
?>