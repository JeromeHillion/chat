<?php

//On importe notre model TchatBdd.php pour réaliser les traitements relative à l'utilisateur
require './model/TchatBdd.php';

//On importe notre model User
require './model/User.php';

//Fonction qui va ajouter un utilisateur dans la bdd
function addUser(string $email, string $nickname, string $password){

//On créer une instance de la bdd pour s'y connecter
    $bdd = new TchatBdd();

//Connexion
    $bdd_connexion =$bdd->dbConnexion();

    //On teste si nos champs sont bien remplie
    if (empty($_POST['email'] or empty($_POST['nickname'] or empty($_POST['password'])))){
        header('Location: index.php');
        exit();
    }
    else{

        $user = new User( $email,  $nickname, openssl_encrypt($password, "AES-128-ECB",'some password' ) );
    }

    //On prépare notre requète d'insertion
    $sql = $bdd_connexion->prepare("INSERT INTO user (email, nickname, password) VALUES(?,?,?)");

    //On l'execute
    $sql->execute([
        $user->getEmail(),
        $user->getNickname(),
        $user->getPassword(),
    ]);

function verifPassword($pass, $pass_hach): bool
{
if ($pass === openssl_decrypt($pass_hach,  "AES-128-ECB",'some password')){
    return true;
}
return false;
}
function login($nickname, $password){
session_start();
//tester si les champs $_POST existents
    if (empty($_POST['email'])
        || empty($_POST['password'])) {
        header('Location: login.php');
        exit();
    }
    //On créer une instance de la bdd pour s'y connecter
    $bdd = new TchatBdd();

//Connexion
    $bdd_connexion =$bdd->dbConnexion();

    /*
    récupérer les valeurs d'un user qui aurait comme email $_POST['inputEmail']
    si on récupére aucune données -> email n'est pas bon
    comparer le mot de passe de cet utiisateur avec $_POST['inputPassword']
    si la comparaison renvoi false -> le mot de passe n'est pas bon

    si on passe ces controles, on pourra :
    stocker dans une variable SESSION les infos du user
    mettre à jour la date de login dans la base de données
    */
//preparer la requete
//chercher un user qui possède l'email
    $bdd_connexion->prepare('
    SELECT id, nickname, password
    FROM user 
    WHERE email = ? LIMIT 0,1
    ');
    //test si le mot de passe n'est pas le bon


    if(!verifPassword($_POST['password'], $user['password'])){
        header('Location: login.php');
    }
// l'identification est correct

//mise en place de la variable SESSION
    $_SESSION['user'] = [
        'id' => intVal($user['id']),
        'nickname' => htmlspecialchars($user['nickname'])
    ];


}

}
