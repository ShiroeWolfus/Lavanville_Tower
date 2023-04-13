<?php
///Gestion des erreurs 
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));