<?php
// On importe notre userDao
require'./dao/userDao.php';
if ($_POST){
    $email =$_POST['email'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    addUser( $email,  $nickname,  $password);
}


$template= 'register.phtml';
require 'views/layout.phtml';