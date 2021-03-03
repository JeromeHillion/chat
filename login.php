<?php
session_start();

require './dao/userDao.php';

if (isset($_POST) && !empty($_POST['email'])  && !empty($_POST['password'])){

    login();

}

require './views/login.phtml';