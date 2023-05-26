<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;

abstract class Vehicle {
    /**
     * @var array $parts
     */
    private array $parts = [];
    public function addPart(string $partName, object $part): void {
        $this->parts[$partName] = $part;
    }

}
