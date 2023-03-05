<?php

$pageHeader = 'Добро пожаловать';
foreach ($_SESSION as $key=>$value){
    $userName = $value;
}

if(isset($_GET['action']) && $_GET['action'] === 'logout'){
    unset($_SESSION['user']);
    header('Location: /');
}

//$userName = $_SESSION['user'];
//if(isset($_SESSION['user'])){
//    $userName = $_SESSION['user'];
//}elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])){
//    $userName = $_REQUEST['username'];
//   $_SESSION['user'] = $userName;
//}

require_once 'view/home.php';