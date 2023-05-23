<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\CanonicalExample;

use InvalidArgumentException;

class StaticFactory {
    /**
     * @param string $type
     * @throws InvalidArgumentException
     * @return Formatter
     */
    public static function factory(string $type): Formatter {
        return match ($type) {
            'number' => new FormatNumber(),
            'string' => new FormatString(),
            default => throw new InvalidArgumentException('Unknown format given')
        };
    }

}
