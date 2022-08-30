<?php

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

product_add($db, $product_name,
    $product_brand, $cat_id, $product_qt, $product_price, $product_description, $product_info1);

$lastInsert = product_get_last($db);

$row =  $lastInsert -> fetch(PDO::FETCH_ASSOC);


$target_dir = "uploads/".$row['product_id'].'/';
$target_file = $target_dir . basename('main.png');
$uploadOk = 1;

$mainimg = $_FILES["mainimg"]["tmp_name"];

if(isset($_POST["submit"])){
    $check = getimagesize($mainimg);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (!is_dir($target_dir)) {
    mkdir($target_dir);
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($mainimg,$target_file)) {
       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


header('location:product_list_admin.php');
?>
