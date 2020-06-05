<?php

namespace App\Operands;

use App\Operand;
use App\Operands\Operand as BaseOperand;

class Increment extends BaseOperand
{
    /**
     * {@inheritDoc}
     */
    protected function process(int $number): int
    {
        return Operand::increase($number);
    }
}
