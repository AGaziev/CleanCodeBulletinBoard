<?php

namespace Object;

class User
{
    private string $email;
    private string $passwordHash;

    public function __construct($email, $password)
    {
        $this->$email = $email;
        $this->$password = $this->hashingPass($password);
    }

    private function hashingPass($pass){
        return password_hash($pass, PASSWORD_DEFAULT);
    }


    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    public function __equal(User $other): bool
    {
        if ($this->email == $other->email)
            return True;
        else return False;
    }
}