<?php

namespace App\DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * @var Mediator $mediator
     */
    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

}
