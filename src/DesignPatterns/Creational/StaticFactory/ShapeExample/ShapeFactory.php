<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\ShapeExample;

use InvalidArgumentException;

class ShapeFactory {
    /**
     * @param string $type
     * @param array $params
     *
     * @return Shape
     */
    public static function factory(string $type, array $params = []): Shape {
        return match ($type) {
            'square' => new Square($params['width']),
            'rectangle' => new Rectangle($params['width'], $params['height']),
            default => throw new InvalidArgumentException()
        };
    }

}
