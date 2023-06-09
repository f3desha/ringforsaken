<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\NullObject;

class PrintLogger implements Logger {

    public function log(string $str): void {
        echo $str;
    }
}
