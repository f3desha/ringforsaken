<?php declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\NullObject;

class Service {
    /**
     * @var Logger $logger
     */
    private Logger $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function doSomething(): void {
        $this->logger->log('We are in method: ' . __METHOD__);
    }

}
