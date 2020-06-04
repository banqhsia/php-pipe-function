<?php

use PHPUnit\Framework\TestCase;

class OperandFunctionTest extends TestCase
{
    public function test_increment()
    {
        $this->assertEquals(5, pipe(4, 'increment'));
    }
}
