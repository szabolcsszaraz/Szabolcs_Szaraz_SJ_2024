<?php

//konštanta DATABASE obsahujúca asoc pole 
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'szabi_test',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

session_start();

require_once('classes/Menu.php');
require_once('classes/Page.php');
require_once('classes/Database.php');
require_once('classes/Contact.php');
require_once('classes/User.php');
?>