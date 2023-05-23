<?php declare(strict_types=1);

use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\FormatNumber;
use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\FormatString;
use App\DesignPatterns\Creational\StaticFactory\CanonicalExample\StaticFactory;
use App\DesignPatterns\Creational\StaticFactory\ShapeExample\Rectangle;
use App\DesignPatterns\Creational\StaticFactory\ShapeExample\ShapeFactory;
use App\DesignPatterns\Creational\StaticFactory\ShapeExample\Square;
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

    public function testCanCreateSquare(): void {
        $this->assertInstanceOf(Square::class, ShapeFactory::factory('square', ['width' => 2]));
    }

    public function testCanCreateRectangle(): void {
        $this->assertInstanceOf(Rectangle::class, ShapeFactory::factory('rectangle', ['width' => 2, 'height' => 3]));
    }

    public function testGetSquareArea(): void {
        $square = ShapeFactory::factory('square', ['width' => 2]);
        $this->assertEquals($square->getArea(), 4);
    }

    public function testGetRectangleArea(): void {
        $rectangle = ShapeFactory::factory('rectangle', ['width' => 2, 'height' => 3]);
        $this->assertEquals($rectangle->getArea(), 6);
    }

}
