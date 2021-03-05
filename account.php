<?php
require './dao/accountDao.php';
session_start();
$infosUser = readinfoUser();





$template= 'account.phtml';
require 'views/layout.phtml';