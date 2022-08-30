<?php

$emp_id = $_POST['product_id'];
$emp_name = $_POST['emp_name'];
$emp_lastname  = $_POST['emp_lastname'];
$emp_email  = $_POST['emp_email'];
$emp_phone = $_POST['emp_phone'];
$emp_status = $_POST['emp_status'];
$emp_username = $_POST['emp_username'];
$emp_password = $_POST['emp_password'];
$emp_salaire = $_POST['emp_salaire'];
$role_id = $_POST['role_id'];

include('model/database.php');
include('model/emp.php');

$db = db_connect();

product_update($db, $product_name,
$product_brand, $cat_id, $product_qt, $product_price, $product_description, $product_info1, $product_id);

header('location:employes_list.php');
?>