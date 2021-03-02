<?php
require './controller/indexController.php';

$tchatMessages = showMessage();

require 'views/index.phtml';
