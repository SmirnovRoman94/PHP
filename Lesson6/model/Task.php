<?php

class Task
{
    private bool $isDone;
    private  $description;

    /**
     * @param bool $isDone
     * @param string $description
     */
    public function __construct(bool $isDone, string $description)
    {
        $this->isDone = $isDone;
        $this->description = $description;
    }


    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


}