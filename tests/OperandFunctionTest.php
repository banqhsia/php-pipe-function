<?php

use PHPUnit\Framework\TestCase;

class OperandFunctionTest extends TestCase
{
    public function test_increase()
    {
        $this->assertEquals(6, increase(5));
        $this->assertEquals(101, increase(100));
    }

    public function test_decrease()
    {
        $this->assertEquals(7, decrease(8));
        $this->assertEquals(101, decrease(102));
    }

    public function test_square()
    {
        $this->assertEquals(49, square(7));
        $this->assertEquals(169, square(13));
    }

    public function test_pipe()
    {
        $this->assertEquals(5, pipe(4, 'increase'));
        $this->assertEquals(6, pipe(4, 'increase', 'increase'));

        $this->assertEquals(3, pipe(4, 'decrease'));
        $this->assertEquals(2, pipe(4, 'decrease', 'decrease'));

        $this->assertEquals(25, pipe(7, 'decrease', 'decrease', 'square'));
        $this->assertEquals(9, pipe(4, 'decrease', 'decrease', 'increase', 'square'));
    }
}
