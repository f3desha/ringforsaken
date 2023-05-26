<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\ConceptualExample;

use SplSubject;

class ConcreteObserverB implements \SplObserver {

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "ConcreteObserverB: Reacted to the event.\n";
        }
    }
}
