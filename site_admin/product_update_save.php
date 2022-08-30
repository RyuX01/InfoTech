<?php

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_brand  = $_POST['product_brand'];
$cat_id  = $_POST['cat_id'];
$product_qt  = $_POST['product_qt'];
$product_price  = $_POST['product_price'];
$product_description = $_POST['product_description'];
$product_info1 = $_POST['product_info1'];

include('model/database.php');
include('model/product.php');

$db = db_connect();

product_update($db, $product_name,
    $product_brand, $cat_id, $product_qt, $product_price, $product_description, $product_info1, $product_id);

$lastInsert = product_get_last($db);

$row =  $lastInsert -> fetch(PDO::FETCH_ASSOC);

header('location:product_list_admin.php');
?>