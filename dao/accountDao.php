<?php
require './model/User.php';
require './model/TchatBdd.php';

function readinfoUser(){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();
    $sql= $chat_db ->prepare('
    SELECT id, nickname, email, last_login
    FROM user 

    ');
    $sql->execute();

    /*Retourne un tableau associatif pour chaque entrée de notre table
     *avec le nom des colonnes sélectionnées en clefs*/
    return $resultats = $sql->fetch(PDO::FETCH_ASSOC);
}