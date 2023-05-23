<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\CanonicalExample;

interface Formatter {
    /**
     * @param string $input
     *
     * @return string
     */
    public function format(string $input): string  ;
}