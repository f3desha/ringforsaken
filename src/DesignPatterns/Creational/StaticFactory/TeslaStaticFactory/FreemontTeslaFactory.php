<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

class FreemontTeslaFactory extends TeslaFactory {
    public function getActualModels(): array {
        return [
            TeslaModelsMapper::TESLA3,
            TeslaModelsMapper::TESLAX,
            TeslaModelsMapper::ROADSTER
        ];
    }

}
