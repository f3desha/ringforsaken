<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\ConceptualExample;

use SplSubject;

class ConcreteObserverA implements \SplObserver {

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void {
        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}
