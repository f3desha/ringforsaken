<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class Ui extends Colleague
{
    public function outputUserInfo(string $username): void
    {
        echo $this->mediator->getUser($username);
    }

}
