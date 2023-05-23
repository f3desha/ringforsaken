<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\CanonicalExample;

class FormatString implements Formatter {

    /**
     * @inheritDoc
     */
    public function format(string $input): string {
        return $input;
    }
}
