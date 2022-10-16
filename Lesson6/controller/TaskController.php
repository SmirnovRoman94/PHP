<?php
$username = $_SESSION['user'];




if(isset($_POST['text'])){
    $task = strip_tags($_POST['text']);
    $_SESSION['task'][] = $task;
    header("Location: /view/task.php");
    die();
}

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $key = $_GET['key'];
    var_dump($key);
    unset($_SESSION['task'][$key]);
    header("Location: /view/task.php");
    die();
}

$tasks = $_SESSION['task'] ?? null;
require_once 'view/task.php';