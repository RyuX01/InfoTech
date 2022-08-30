<?php

function user_check ($db,$user_username,$user_password) {

    $sql = 'select * from user 
    where user_username = :user_username
    and user_password = :user_password';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':user_username',$user_username);
    $requete -> bindValue(':user_password',$user_password);
    $requete->execute();

    return $requete;
}


function user_add($db, $user_username, $user_email, $user_password, $priv_id){

    $sql = " insert into user (user_username, user_email, user_password, priv_id)
    
    values ( :user_username, :user_email, :user_password, :priv_id)" ;
    $requete = $db-> prepare($sql);
    $requete -> bindValue(':user_username',$user_username);
    $requete -> bindValue(':user_email',$user_email);
    $requete -> bindValue(':user_password',$user_password);
    $requete -> bindValue(':priv_id',$priv_id);

    $requete->execute();

    return $requete;
}

function user_get_all($db) {

    $sql = 'select * from user order by user_id desc';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}

?>