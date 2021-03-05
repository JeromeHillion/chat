<?php
require './model/TchatBdd.php';
function addMessage($user_id,$message){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();

        $sql = $chat_db->prepare("INSERT INTO chat( user_id,message)  VALUES (?,?)");
        $sql->execute([$user_id,$message]);
        /*echo "Entrée ajoutée dans la table";*/

    //return $sql;
}

function readMessage(){
    $db = new TchatBdd();

    $chat_db = $db->dbConnexion();
    /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                    *users pour chaque entrée de la table*/
    $sql= $chat_db ->prepare("SELECT chat.id, user.nickname, message, DATE_FORMAT(chatDate,'%H:%i:%s') as dateMessage, user.Created_at FROM chat INNER JOIN user ON chat.user_id = user.id  ORDER BY chatDate"

    );
    $sql->execute();

    /*Retourne un tableau associatif pour chaque entrée de notre table
     *avec le nom des colonnes sélectionnées en clefs*/
    return $resultats = $sql->fetchAll(PDO::FETCH_ASSOC);
}

function deleteMessage(){



   //Si je ne suis pas loggé, je n'ai rien à faire ici
    if (!isset($_SESSION['user'])){
        header('Location: ./login.php');
    }

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