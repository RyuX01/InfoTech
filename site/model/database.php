<?php

function db_connect(){
    $host = 'localhost';
    $dbname = 'infotech_init';

    $dsn = "mysql:host=$host;dbname=$dbname";
    $user_name = 'root';
    $pass = '';

    try {
        $db = new PDO($dsn,$user_name,$pass);
//        echo "Connecter  ";
    } catch ( Exception  $e ) {
//        echo "ERREUR :  " . $e->getMessage();
        header('location:error.php');
    }

    return $db;
}

