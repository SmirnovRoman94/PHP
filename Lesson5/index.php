<?php

include 'User.php';
include 'Task.php';
include 'Comment.php';
include 'TaskService.php';

//created new class

$user = new User('Roman', 'user@user.ru');
$task = new Task('test', 1, $user);

$task->setDescription('test2');
$task->markAsDone(true);

TaskService::addComment($user, $task, 'First comment');
TaskService::addComment($user, $task, 'Second comment');
var_dump($task);

echo "Commetns ".PHP_EOL;


foreach ($task->getComments() as $comment){
    echo $comment->getText() . ", ";
    echo "Name Task: " . $comment->getTask()->getDescription() . ", ". $comment->getAuthor()->getName().PHP_EOL;
}

