<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

class ShanhaiTeslaFactory extends TeslaFactory {

    public function getActualModels(): array {
        return [
            TeslaModelsMapper::TESLAY,
            TeslaModelsMapper::CYBERTRUCK
        ];
    }
}
