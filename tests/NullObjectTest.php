<?php declare(strict_types=1);

namespace Tests;

use App\DesignPatterns\Behavioral\NullObject\NullLogger;
use App\DesignPatterns\Behavioral\NullObject\PrintLogger;
use App\DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

final class NullObjectTest extends TestCase {
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in method: App\DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }

}
