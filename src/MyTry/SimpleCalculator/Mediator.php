<?php declare(strict_types=1);

namespace App\MyTry\SimpleCalculator;

interface Mediator {
    public function notify(Operand $operand, string $event = ''): void;
}