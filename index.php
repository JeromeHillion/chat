<?php
//On démmarre la session
session_start();
require './dao/indexDao.php';


//Si il n'y a pas de session active on redirige vers la page de login
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

/*else{

}*/

if ($_POST) {
    $user_id= $_SESSION['user']['id'];
    $message = $_POST['message'];
    addMessage($user_id,$message);
}

if ($_GET) {
    deleteMessage();
}

$tchatMessages = readMessage();

$template= 'index.phtml';
require 'views/layout.phtml';
