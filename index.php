<?php
require './dao/indexDao.php';


//On démmarre la session
session_start();

//Si il n'y a pas de session active on redirige vers la page de login
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

/*else{

}*/

/*if ($_POST) {
    $nickname = $_POST['nickname'];
    $message = $_POST['message'];
    addMessage($nickname,$message);
}


if ($_GET) {
    return deleteMessage();
}

$tchatMessages = readMessage();*/

require 'views/index.phtml';
