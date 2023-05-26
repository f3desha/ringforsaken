<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\ConceptualExample;

use SplObserver;

class NullSubject implements \SplSubject {

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void {

    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void {

    }

    /**
     * @inheritDoc
     */
    public function notify(): void {

    }
}
