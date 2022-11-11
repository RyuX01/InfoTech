<?php

function cart_get_all($db) {

    $sql = 'select * from cart
    INNER JOIN product ON product.product_id = cart.product_id
    INNER JOIN product ON user.user_id = cart.user_id
    order by cart.product_id desc';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}

function cart_get_last($db) {
    $sql = 'select * from cart order by cart_id desc limit 1';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}

function cart_add($db,$product_id,$cart_id,$product_qt,$product_price){

    $sql = " insert into cart (product_id,cart_id,product_qt,product_price) 
    values(:product_id,:cart_id,:product_qt,:product_price)";

$requete = $db-> prepare($sql);
$requete -> bindValue(':product_id',$product_id);
$requete -> bindValue(':cart_id',$cart_id);
$requete -> bindValue(':product_qt',$product_qt);
$requete -> bindValue(':product_price',$product_price);
$requete->execute();

return $requete;
}

// Button supprimer
function cart_delete_one($db,$id) {
    $sql = 'delete from cart where cart_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id',$id);
    $requete->execute();

    return $requete;
}
?>