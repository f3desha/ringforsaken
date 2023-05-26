<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;

class Director {
    public function build(Builder $builder): Vehicle {
        $builder->createVehicle();
        $builder->addWheels();
        $builder->addEngines();
        $builder->addDoors();
        return $builder->getVehicle();
    }

}
