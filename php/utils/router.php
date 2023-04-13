<?php
//constante qui contiendra la route index
//define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME"])) ;

//méthode explode pour séparer les paramètres
$params = explode('/', $_GET['p']);

//si params existe alors
if ($params[0]) {
    //stock dans controller du premier param du tableau
    $controller = ucfirst($params[0]);
} else {
    //sinon la variable prend la valeur Home 
    $controller = 'Home';
}
//si le second param existe alors
if (@$params[1]) {
    $method = $params[1];
    //la valeur de méthod sera la page index
} else {
    $method = 'index';
}
//si il y a un 3ème indice à params,
if (@$params[2]) {
    $req = $params[2];
} else {
    //on lui attribue une valeur vide
    $req = '';
}


$called = 'Controllers/' . $controller . '.php';
require($called);
//méthode qui permet de vérifier si une méthode existe dans un controller
if (method_exists($controller, $method)) {
    $ctrl = new $controller();
    $ctrl->$method($req);
} else {
    http_response_code(404);
    echo 'Method ' . $controller . '::' . $method . '() error404 un bug dans la matrice a été rencontré !';
}
