<?php
require './dao/indexDao.php';


if ($_POST) {
    $nickname = $_POST['nickname'];
    $message = $_POST['message'];
    addMessage($nickname,$message);
}


if ($_GET) {
    return deleteMessage();
}

$tchatMessages = readMessage();

require 'views/index.phtml';
