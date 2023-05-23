<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

abstract class TeslaFactory {
    /**
     * @var string $name
     */
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
    public static function create(string $type): TeslaCar {
        return match ($type) {
            TeslaModelsMapper::TESLAX => new TeslaModelX(TeslaModelsMapper::TESLAX),
            TeslaModelsMapper::SEMI => new TeslaSemi(TeslaModelsMapper::SEMI),
            TeslaModelsMapper::TESLA3 => new TeslaModel3(TeslaModelsMapper::TESLA3),
            TeslaModelsMapper::TESLAY => new TeslaModelY(TeslaModelsMapper::TESLAY),
            TeslaModelsMapper::CYBERTRUCK => new TeslaCybertruck(TeslaModelsMapper::CYBERTRUCK),
            TeslaModelsMapper::ROADSTER => new TeslaRoadster(TeslaModelsMapper::ROADSTER)
        };
    }

    abstract public function getActualModels(): array;


}
