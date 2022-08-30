<?php

function emp_check ($db,$emp_username,$emp_password) {

    $sql = 'select * from employes
    where emp_username = :emp_username
    and emp_password = :emp_password';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':emp_username',$emp_username);
    $requete -> bindValue(':emp_password',$emp_password);
    $requete->execute();

    return $requete;
}


function emp_add($db, $emp_name, $emp_lastname, $emp_email, $emp_phone ,$emp_status, 
$emp_username, $emp_password, $emp_salaire, $role_id){

    $sql = " insert into employes (emp_name, emp_lastname, emp_email, emp_phone ,emp_status, 
    emp_username, emp_password, emp_salaire, role_id)
    
    values (:emp_name, :emp_lastname, :emp_email, :emp_phone, :emp_status, :emp_username, 
    :emp_password, :emp_salaire, :role_id)" ;
    
    $requete = $db-> prepare($sql);
    $requete -> bindValue(':emp_name',$emp_name);
    $requete -> bindValue(':emp_lastname',$emp_lastname);
    $requete -> bindValue(':emp_email',$emp_email);
    $requete -> bindValue(':emp_phone',$emp_phone);
    $requete -> bindValue(':emp_status',$emp_status);
    $requete -> bindValue(':emp_username',$emp_username);
    $requete -> bindValue(':emp_password',$emp_password);
    $requete -> bindValue(':emp_salaire',$emp_salaire);
    $requete -> bindValue(':role_id',$role_id);

    $requete->execute();

    return $requete;
}

//add emp
function emp_get_all($db) {
    $sql = 'select * from employes order by emp_id desc';

    $requete = $db->prepare($sql);
    $requete->execute();

    return $requete;
}

// Delete user
function emp_delete_one($db,$id) {
    $sql = 'delete from employes where emp_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id',$id);
    $requete->execute();

    return $requete;
}

function emp_get_one($db,$id) {
    $sql = 'select * from employes where emp_id = :id';

    $requete = $db->prepare($sql);
    $requete -> bindValue(':id', $id);
    $requete->execute();

    return $requete;
}
?>