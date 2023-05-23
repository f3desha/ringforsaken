<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\ShapeExample;

use InvalidArgumentException;

class ShapeFactory {
    /**
     * @param string $type
     *
     * @return Shape
     */
    public static function factory(string $type): Shape {
        return match ($type) {
            'square' => new Square(),
            'rectangle' => new Rectangle(),
            default => throw new InvalidArgumentException()
        };
    }

}
