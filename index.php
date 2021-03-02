<?php
require './controller/indexController.php';

$tchatMessages = readMessage();
/*$message = deleteMessage();*/

require 'views/index.phtml';
