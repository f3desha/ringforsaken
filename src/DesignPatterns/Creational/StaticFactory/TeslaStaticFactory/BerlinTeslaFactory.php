<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

class BerlinTeslaFactory extends TeslaFactory {

    public function getActualModels(): array {
        return [
            TeslaModelsMapper::ROADSTER
        ];
    }
}
