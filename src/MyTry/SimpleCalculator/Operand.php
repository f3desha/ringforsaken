<?php declare(strict_types=1);

namespace App\MyTry\SimpleCalculator;

abstract class Operand {
    /**
     * @var float|null
     */
    private ?float $value = null;
    /**
     * @var Mediator $calculator
     */
    private Mediator $calculator;
    public function __construct(Mediator $calculator) {
        $this->calculator = $calculator;
    }

    /**
     * @return float
     */
    public function getValue(): float {
        if (is_null($this->value)) {
            $this->calculate();
        }
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void {
        $this->value = $value;
    }

    public function init(float $value): void {
        $this->setValue($value);
        $this->calculator->notify($this, 'init');
    }

    public function calculate(): void {
        $this->calculator->notify($this, 'calculate');
    }

}
