<?php

use App\DesignPatterns\Behavioral\NullObject\NullLogger;
use App\DesignPatterns\Behavioral\NullObject\PrintLogger;
use App\DesignPatterns\Behavioral\NullObject\Service;

require_once 'vendor/autoload.php';

final class App {
    final public static function run(): void {
        $service = new Service(new PrintLogger());
        $service->doSomething();
    }



}

App::run();