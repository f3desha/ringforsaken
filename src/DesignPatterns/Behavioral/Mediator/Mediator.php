<?php

namespace App\DesignPatterns\Behavioral\Mediator;

interface Mediator
{
    public function getUser(string $username): string;
}