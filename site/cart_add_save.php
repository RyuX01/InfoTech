<?php

$product_id = $_POST['product_id'];
$cart_id  = $_POST['cart_id'];
$product_price = $_POST['product_price'];

include('model/database.php');
include ('model/cart.php');

$db = db_connect();

cart_add($db,$product_id,$cart_id,$product_qt,$product_price);


header('location:panier.php');
?>
