<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPusTwoResultsInFour()
    {
        $this->assertEquals(5, 2 + 2);
    }
}