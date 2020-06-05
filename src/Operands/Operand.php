<?php

namespace App\Operands;

abstract class Operand implements Pipeable
{
    /**
     * @var Pipeable|static
     */
    protected $next;

    /**
     * {@inheritDoc}
     */
    public function setNext(Pipeable $next): Pipeable
    {
        return $this->next = $next;
    }

    /**
     * {@inheritDoc}
     */
    public function hasNext(): bool
    {
        return null !== $this->next;
    }

    /**
     * 按照各個步驟計算結果
     *
     * @param int $number
     * @return int
     * @final
     */
    final public function calculate(int $number):int
    {
        $number = $this->process($number);

        if ($this->hasNext()) {
            $number = $this->next->calculate($number);
        }

        return $number;
    }
}
