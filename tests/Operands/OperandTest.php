<?php

use App\Operands\Operand;
use PHPUnit\Framework\TestCase;

class OperandTest extends TestCase
{
    /**
     * @var Operand
     */
    private $target;

    protected function setUp(): void
    {
        $this->target = $this->getMockForAbstractClass(Operand::class);
    }

    public function test_hasNext_should_be_true()
    {
        $next = $this->createMock(Operand::class);

        $this->target->setNext($next);

        $this->assertTrue($this->target->hasNext());
    }

    public function test_hasNext_should_be_false()
    {
        // 沒有下一步
        $this->assertFalse($this->target->hasNext());
    }

    public function test_should_get_next_step_class_after_setNext()
    {
        $next = $this->createMock(Operand::class);

        $this->assertSame($next, $this->target->setNext($next));
    }

    public function test_calculate_should_calculate_step_by_step()
    {
        $firstStep = new class extends Operand
        {
            protected function process(int $number): int
            {
                return $number + 10;
            }
        };

        $secondStep = new class extends Operand
        {
            protected function process(int $number): int
            {
                return $number - 7;
            }
        };

        $firstStep->setNext($secondStep);

        $actual = $firstStep->calculate(5);

        // 5 + 10 - 7  = 8
        $this->assertEquals(8, $actual);
    }

}
