<?php
require_once 'model/UserProvider.php';

$error = null;
if(isset($_POST['username'], $_POST['password'])){
    ['username' => $userName, 'password' => $password] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUserAndPassword($userName, $password);

    if($user === null){
        $error = "Пользователь с указанными учетными данными не найден";
    }else{
        $_SESSION['user'] = $userName;

    }
}

if(isset($_SESSION['user'])){
    header('Location: /');
}


require_once 'view/signin.php';