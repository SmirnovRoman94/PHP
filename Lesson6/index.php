<?php
session_start();

if(strlen($_SESSION['user']) == 0){
    $controller='security';
}else{
    $controller='home';
}
$routes = require 'routes.php';
require_once  $routes[$controller];
