<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\ShapeExample;

class Square implements Shape {
    /**
     * @var float $width
     */
    private float $width;
    public function __construct(float $width) {
        $this->width = $width;
    }

    /**
     * @inheritDoc
     */
    public function getArea(): float {
        return pow($this->width);
    }
}
