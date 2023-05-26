<?php declare(strict_types=1);

namespace Tests;

use App\DesignPatterns\Behavioral\Observer\ConceptualExample\ConcreteObserverA;
use App\DesignPatterns\Behavioral\Observer\ConceptualExample\ConcreteObserverB;
use App\DesignPatterns\Behavioral\Observer\ConceptualExample\NullSubject;
use App\DesignPatterns\Behavioral\Observer\ConceptualExample\Subject;
use PHPUnit\Framework\TestCase;
use SplSubject;

class ConceptualObserverTest extends TestCase {
    /**
     * @var SplSubject $subject
     */
    private SplSubject $subject;
    protected function setUp(): void {
        $this->subject = new Subject();
    }

    public function testAttachedTwoObservers(): void {

        $o1 = new ConcreteObserverA();
        $this->subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $this->subject->attach($o2);

        $this->assertCount(2, $this->subject->getObservers());
    }

    protected function tearDown(): void {
        $this->subject = new NullSubject();
    }

}
