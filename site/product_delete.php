<?php

include('model/database.php');
include('model/product.php');

$db = db_connect();

$id = $_GET['id_sent'];
$requete = product_delete_one($db, $id);

header('location:product_list_admin.php');
?>