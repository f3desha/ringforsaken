<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\ShapeExample;

class Rectangle implements Shape {
    /**
     * @var float $width
     */
    private float $width;
    /**
     * @var float $height
     */
    private float $height;
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @inheritDoc
     */
    public function getArea(): float {
        return $this->width * $this->height;
    }
}
