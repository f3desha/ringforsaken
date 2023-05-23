<?php

use App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory\ClientCode;

require_once 'vendor/autoload.php';

final class App {
    final public static function run(): void {
        $factory = ClientCode::visitFactory();
        $car = ClientCode::buyCarOnFactory($factory);
        echo "You have bought " . $car->getName() . " on " . $factory->getName() . "\n";
    }



}

App::run();