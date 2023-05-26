<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;

class CarBuilder implements Builder {
    /**
     * @var Car $car
     */
    private Car $car;

    public function createVehicle(): void {
        $this->car = new Car();
    }

    public function addWheels(): void {
        $this->car->addPart('frontLeftWheel', new Wheel());
        $this->car->addPart('frontRightWheel', new Wheel());
        $this->car->addPart('rearLeftWheel', new Wheel());
        $this->car->addPart('rearRightWheel', new Wheel());
    }

    public function addEngines(): void {
        $this->car->addPart('mainEngine', new Engine());
    }

    public function addDoors(): void {
        $this->car->addPart('frontLeftDoor', new Door());
        $this->car->addPart('frontRightDoor', new Door());
        $this->car->addPart('rearLeftDoor', new Door());
        $this->car->addPart('rearRightDoor', new Door());
        $this->car->addPart('backDoor', new Door());
    }

    public function getVehicle(): Vehicle {
        return $this->car;
    }
}
