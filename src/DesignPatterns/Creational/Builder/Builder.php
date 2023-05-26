<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;

interface Builder {
    public function createVehicle(): void;

    public function addWheels(): void;

    public function addEngines(): void;

    public function addDoors(): void;

    public function getVehicle(): Vehicle;
}