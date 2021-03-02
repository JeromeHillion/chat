<?php
require './model/TchatBdd.php';
function addMessage($nickname, $message){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();

        $sql = $chat_db->prepare("INSERT INTO chat(pseudo, message) VALUES (?,?)");
        $sql->execute([$nickname, $message]);
        /*echo "Entrée ajoutée dans la table";*/

    //return $sql;
}

function readMessage(){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();
    /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                    *users pour chaque entrée de la table*/
    $sql= $chat_db ->prepare("SELECT id, pseudo, message,
       DATE_FORMAT(chatDate,'%H:%i:%s') as dateConv 
       FROM chat");
    $sql->execute();

    /*Retourne un tableau associatif pour chaque entrée de notre table
     *avec le nom des colonnes sélectionnées en clefs*/
    return $resultats = $sql->fetchAll(PDO::FETCH_ASSOC);
}

function deleteMessage(){
// Validation du paramètre id de la chaîne de requête
//absence d'une clé id dans $_GET ou $_GET['id'] n'est pas numeric

    if( !array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']) ) {
        header('Location: index.php');
        exit();
    }
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();
//préparer la requete
    $sql  = $chat_db ->prepare('DELETE FROM chat WHERE id=?');

//executer la requete
    $sql->execute([intVal($_GET['id'])]);
// redirection vers index.php
    header('Location: index.php');
    exit();

}