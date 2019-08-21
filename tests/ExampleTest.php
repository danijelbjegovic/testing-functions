<?php
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class ExampleTest extends MockeryTestCase
{
    public function testAddingTwoPusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
    }

}