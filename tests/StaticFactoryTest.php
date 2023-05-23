<?php declare(strict_types=1);

use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\FormatNumber;
use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\FormatString;
use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\StaticFactory;
use PHPUnit\Framework\TestCase;

final class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter(): void {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter(): void {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException(): void {
        $this->expectException(InvalidArgumentException::class);
        StaticFactory::factory('object');
    }

}
