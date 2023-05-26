<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\ConceptualExample;

use SplObjectStorage;
use SplObserver;

class Subject implements \SplSubject {
    /**
     * @var int $state
     */
    public int $state;

    /**
     * @var SplObjectStorage $observers
     */
    private SplObjectStorage $observers;

    public function __construct() {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void {
        echo "Subject: attached an observer";
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void {
        $this->observers->detach($observer);
        echo "Subject: dettached an observer";
    }

    /**
     * @inheritDoc
     */
    public function notify(): void {
        echo "Subject: Notifying observers...\n";
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void {
        echo "Subject: Im doing something important\n";
        $this->state = random_int(0,10);

        echo "Subject: My state has changed to: " . $this->state . "\n";
        $this->notify();
    }

    public function getObservers() {
        return $this->observers;
    }

}
