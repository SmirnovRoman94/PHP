<?php

class TaskProvider
{
    public static function addTask(Task $task): void
    {
        $task->addCommentItem(new Comment($author, $task, $text));
    }
}