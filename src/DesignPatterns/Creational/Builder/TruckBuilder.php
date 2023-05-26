<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;

class TruckBuilder implements Builder {
    /**
     * @var Truck $truck
     */
    private Truck $truck;

    public function createVehicle(): void {
        $this->truck = new Truck();
    }

    public function addWheels(): void {
        $this->truck->addPart('frontFirstPairLeftWheel', new Wheel());
        $this->truck->addPart('frontSecondPairLeftWheel', new Wheel());
        $this->truck->addPart('frontFirstPairRightWheel', new Wheel());
        $this->truck->addPart('frontSecondPairRightWheel', new Wheel());
        $this->truck->addPart('rearFirstPairLeftWheel', new Wheel());
        $this->truck->addPart('rearSecondPairLeftWheel', new Wheel());
        $this->truck->addPart('rearFirstPairRightWheel', new Wheel());
        $this->truck->addPart('rearSecondPairRightWheel', new Wheel());

    }

    public function addEngines(): void {
        $this->truck->addPart('V8Engine', new Engine());
    }

    public function addDoors(): void {
        $this->truck->addPart('leftDoor', new Door());
        $this->truck->addPart('rightDoor', new Door());
    }

    public function getVehicle(): Vehicle {
        return $this->truck;
    }
}
