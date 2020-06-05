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

    public function test_pipe_should_call_method_step_by_setp()
    {
        $firstStep = function (int $number): int {
            return $number + 10;
        };

        $secondStep = function (int $number): int {
            return $number * 2;
        };

        $expected = 40;
        $actual = pipe(10, $firstStep, $secondStep);

        $this->assertEquals($expected, $actual);

    }
}
