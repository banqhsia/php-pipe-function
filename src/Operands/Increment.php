<?php

namespace App\Operands;

use App\Operand;

class Increment extends Handler
{
    /**
     * {@inheritDoc}
     */
    public function process(int $number): int
    {
        return Operand::increase($number);
    }
}
