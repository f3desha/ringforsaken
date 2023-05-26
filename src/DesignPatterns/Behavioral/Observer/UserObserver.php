<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver {
    /**
     * @var SplSubject[]
     */
    private array $changedUsers = [];
    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array {
        return $this->changedUsers;
    }

}
