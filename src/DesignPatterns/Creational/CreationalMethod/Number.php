<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\CreationalMethod;

class Number {
    /**
     * @var float $value
     */
    private float $value;

    /**
     * @param int|float $value
     */
    public function __construct(int|float $value) {
        $this->value = (float)$value;
    }

    /**
     * @return float
     */
    public function getValue(): float {
        return $this->value;
    }

    public function next(): self {
        return new self($this->value + 1);
    }

}
