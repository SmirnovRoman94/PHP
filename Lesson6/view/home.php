<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous">
</head>
<body>
    <h1><?=$pageHeader?></h1>
    <p>Рады приветствовать, <?=$userName?></p>
    <a href="?action=logout" class="w-75 btn btn-lg btn-primary mt-1" type="submit">Выйти</a>
    <a href="?controller=task" class="w-75 btn btn-lg btn-primary mt-1">Задачи</a><br>
</body>


