<?php
//On ouvre la session
session_start();

//On vide notre tableau de session
$_SESSION = [];

//On détruit la session
session_destroy();

//Et on redirige vers la page de login
header('Location: ./login.php');
exit();

