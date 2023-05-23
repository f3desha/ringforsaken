<?php declare(strict_types=1);

namespace Tests;

use App\DesignPatterns\Creational\CreationalMethod\Number;
use PHPUnit\Framework\TestCase;

final class CreationalMethodTest extends TestCase {
    public function testGetterAndAcceptsInt(): void {
        $number = new Number(6);
        $this->assertEquals(6, $number->getValue());
    }

    public function testNextMethod(): void {
        $number = new Number(6);
        $newNextNumber = $number->next();
        $this->assertEquals(7, $newNextNumber->getValue());
    }

    public function testGetterAndAcceptsFloat(): void {
        $number = new Number(3.14);
        $this->assertEquals(3.14, $number->getValue());
    }

    public function testNextMethodWithFloat(): void {
        $number = new Number(3.14);
        $newNextNumber = $number->next();
        $this->assertEqualsWithDelta(4.14, $newNextNumber->getValue(),0.0001);
    }

}
