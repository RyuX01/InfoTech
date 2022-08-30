<?php

function product_get_all($db) {

    $sql = 'select * from product order by product_id desc';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}

function product_get_one($db,$id) {

    $sql = 'select * from product where product_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id',$id);
    $requete->execute();

    return $requete;
}

function product_get_last($db) {
    $sql = 'select * from product order by product_id desc limit 1';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}


function product_add($db, $product_name,
$product_brand, $cat_id, $product_qt, $product_price, $product_description, $product_info1){

    $sql = " insert into product (product_name, 
            product_brand, cat_id, product_qt, product_price, 
            product_description, product_info1)

            values (:product_name, 
            :product_brand, :cat_id, :product_qt, :product_price, 
            :product_description, :product_info1)" ;

    $requete = $db-> prepare($sql);
    $requete -> bindValue(':product_name',$product_name);
    $requete -> bindValue(':product_brand',$product_brand);
    $requete -> bindValue(':cat_id',$cat_id);
    $requete -> bindValue(':product_qt',$product_qt);
    $requete -> bindValue(':product_price',$product_price);
    $requete -> bindValue(':product_description',$product_description);
    $requete -> bindValue(':product_info1',$product_info1);
    $requete->execute();

    return $requete;
}



// Button supprimer

function product_delete_one($db,$id) {
    $sql = 'delete from product where product_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id',$id);
    $requete->execute();

    return $requete;
}


// Button Modifier

function product_update($db, $product_name,
$product_brand, $cat_id, $product_qt, $product_price, $product_description, $product_info1, $product_id){

$sql = "update product set 
            product_name = :product_name, 
            product_brand = :product_brand, 
            cat_id = :cat_id,
            product_qt = :product_qt, 
            product_price = :product_price,
            product_description= :product_description
            product_info1= :product_info1
            where product_id = :product_id";

            $requete = $db-> prepare($sql);
            $requete -> bindValue(':product_name',$product_name);
            $requete -> bindValue(':product_brand',$product_brand);
            $requete -> bindValue(':cat_id',$cat_id);
            $requete -> bindValue(':product_qt',$product_qt);
            $requete -> bindValue(':product_price',$product_price);
            $requete -> bindValue(':product_description',$product_description);
            $requete -> bindValue(':product_info1',$product_info1);
            $requete -> bindValue(':product_id',$product_id);
            $requete->execute();
        
            return $requete;
        }

// // -------------

function product_update_one($db,$id) {

    $sql = 'update from product where product_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id',$id);
    $requete->execute();

    return $requete;
}

