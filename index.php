<?php

use App\MyTry\SimpleCalculator\Calculator;
use App\MyTry\SimpleCalculator\Distance;
use App\MyTry\SimpleCalculator\Speed;
use App\MyTry\SimpleCalculator\Time;

require_once 'vendor/autoload.php';

final class App {
    final public static function run(): void {
        $calculator = new Calculator();

        $speed = new Speed($calculator);
        $speed->init(4);

        $distance = new Distance($calculator);
        $distance->init(12);

        $time = new Time($calculator);
        echo $time->getValue();

    }

}

App::run();     