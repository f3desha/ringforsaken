<?php declare(strict_types=1);

namespace Tests;

use App\DesignPatterns\Behavioral\Mediator\Ui;
use App\DesignPatterns\Behavioral\Mediator\UserRepository;
use App\DesignPatterns\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

final class MediatorTest extends TestCase {
    public function testOutputHelloWorld()
    {
       $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

       $this->expectOutputString('User: Dominik');
       $mediator->printInfoAbout('Dominik');
    }

}
