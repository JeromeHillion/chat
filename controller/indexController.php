<?php
require './model/TchatBdd.php';
function showMessage(){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();
    if ($_POST){
        $nickname = $_POST['nickname'];
        $message = $_POST['message'];
        $sql = $chat_db->prepare("INSERT INTO chat(pseudo, message) VALUES (?,?)");

        $sql->execute([$nickname, $message]);
        /*echo "Entrée ajoutée dans la table";*/
    }

    /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                    *users pour chaque entrée de la table*/
    $sql= $chat_db ->prepare("SELECT pseudo, message FROM chat");
    $sql->execute();

    /*Retourne un tableau associatif pour chaque entrée de notre table
     *avec le nom des colonnes sélectionnées en clefs*/
   return $resultats = $sql->fetchAll(PDO::FETCH_ASSOC);
}