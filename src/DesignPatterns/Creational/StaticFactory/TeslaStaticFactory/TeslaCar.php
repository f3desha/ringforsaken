<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

abstract class TeslaCar {
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
}
