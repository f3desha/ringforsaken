<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

class FactorySelecter {
    const FREEMONT = 'Freemont Tesla Gigafactory';
    const SHANHAI = 'Shanhai Tesla Gigafactory';
    const BERLIN = 'Berlin Tesla Gigafactory';

    public function getActualFactories(): array {
        return [
            self::FREEMONT,
            self::SHANHAI,
            self::BERLIN
        ];
    }
    public static function create(string $type): TeslaFactory {
        return match ($type) {
            self::FREEMONT => new FreemontTeslaFactory(self::FREEMONT),
            self::SHANHAI => new ShanhaiTeslaFactory(self::SHANHAI),
            self::BERLIN => new BerlinTeslaFactory(self::BERLIN)
        };
    }

}
