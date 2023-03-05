<?php
require_once 'User.php';
class UserProvider
{
    private array $accounts = [
        'test' => '123'
    ];

    public function getByUserAndPassword(string $userName, string $password): ?User
    {
        $expectedPassword = $this->accounts[$userName] ?? null;
        if($expectedPassword === $password){
            return new User($userName);
        }
        return null;
    }
}