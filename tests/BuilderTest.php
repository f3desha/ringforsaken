<?php declare(strict_types=1);

namespace Tests;

use App\DesignPatterns\Creational\Builder\Car;
use App\DesignPatterns\Creational\Builder\CarBuilder;
use App\DesignPatterns\Creational\Builder\Director;
use App\DesignPatterns\Creational\Builder\Truck;
use App\DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase {
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }

}
