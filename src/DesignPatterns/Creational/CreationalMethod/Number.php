<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\CreationalMethod;

class Number {
    /**
     * @var int
     */
    private int $value;

    /**
     * @param int $value
     */
    public function __construct(int $value) {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int {
        return $this->value;
    }

    public function next(): self {
        return new self($this->value + 1);
    }

}
