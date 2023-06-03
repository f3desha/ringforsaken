<?php declare(strict_types=1);

namespace App\MyTry\SimpleCalculator;

class Calculator implements Mediator {
    /**
     * @var Speed|null
     */
    private ?Speed $speed = null;
    /**
     * @var Time|null
     */
    private ?Time $time = null;
    /**
     * @var Distance|null
     */
    private ?Distance $distance = null;

    public function notify(Operand $operand, string $event = ''): void {
        //Speed
        if ($operand instanceof Speed && $event === 'init') {
            $this->speed = $operand;
        }
        if ($operand instanceof Speed && $event === 'calculate'
            && !is_null($this->distance)
            && !is_null($this->time)) {
            $this->speed = $operand;
            $this->speed->setValue($this->distance->getValue() / $this->time->getValue());
        }

        //Time
        if ($operand instanceof Time && $event === 'init') {
            $this->time = $operand;
        }
        if ($operand instanceof Time && $event === 'calculate'
            && !is_null($this->speed)
            && !is_null($this->distance)) {
            $this->time = $operand;
            $this->time->setValue($this->distance->getValue() / $this->speed->getValue());
        }

        //Distance
        if ($operand instanceof Distance && $event === 'init') {
            $this->distance = $operand;
        }
        if ($operand instanceof Distance && $event === 'calculate'
            && !is_null($this->speed)
            && !is_null($this->time)) {
            $this->distance = $operand;
            $this->distance->setValue($this->speed->getValue() * $this->time->getValue());
        }

    }
}
