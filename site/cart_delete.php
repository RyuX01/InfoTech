<?php

include('model/database.php');
include('model/cart.php');

$db = db_connect();

$id = $_GET['id_sent'];
$requete = product_delete_one($db, $id);

header('location:panier.php');
?>