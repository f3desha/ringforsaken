<?php

use App\DesignPatterns\Behavioral\Observer\User;
use App\DesignPatterns\Behavioral\Observer\UserObserver;

require_once 'vendor/autoload.php';

final class App {
    final public static function run(): void {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@mail.com');
    }



}

App::run();