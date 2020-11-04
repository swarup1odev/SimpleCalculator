<?php

namespace CalculatorGit;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculator()
    {
        $object = new Calculator;
        $this->assertSame(11, $object->addingNumbers(5,6));
    }
}
