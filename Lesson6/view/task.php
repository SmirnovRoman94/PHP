<?php
session_start();
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

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/">Главная</a>
<h1>Ваши задачи  <?=$username?></h1>

<form method="post">
    <input type="text" name="text" placeholder="Добавьте задачу">
    <input type="submit" value="Добавить">
</form>

<?php if(isset($tasks)) : ?>
    <?php foreach ($tasks as $key => $task): ?>
        *<?=$task?> <a href="?action=delete&key=<?=$key?>">[x]</a><br>
    <?php endforeach; ?>
<?php else: ?>
    Нет задач
<?php endif; ?>

</body>
</html>

