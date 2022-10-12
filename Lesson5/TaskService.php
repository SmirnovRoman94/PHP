<?php

class TaskService
{
    public static function addComment(User $author, Task $task, $text): void
    {
        $task->addCommentItem(new Comment($author, $task, $text));
    }
}