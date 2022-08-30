<?php

include('model/database.php');
include('model/emp.php');

$db = db_connect();

$id = $_GET['id_sent'];
$emp = emp_delete_one($db, $id);

header('location:employes_list.php');
?>