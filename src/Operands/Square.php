<?php

namespace App\Operands;

use App\Operand;
use App\Operands\Operand as BaseOperand;

class Square extends BaseOperand
{
    /**
     * {@inheritDoc}
     */
    public function process(int $number): int
    {
        return Operand::square($number);
    }
}
