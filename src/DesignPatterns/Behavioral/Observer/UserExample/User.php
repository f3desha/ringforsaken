<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\UserExample;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject {
    /**
     * @var SplObjectStorage $observers
     */
    private SplObjectStorage $observers;
    /**
     * @var string $email
     */
    private string $email;
    public function __construct() {
        $this->observers = new SplObjectStorage();
    }

    public function changeEmail(string $email): void
    {
        $this->email = $email;
        $this->notify();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify(): void {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
