<?php

namespace App\Operands;

interface Pipeable
{
    /**
     * 設定下一個處理的步驟
     *
     * @param Pipeable $next
     * @return Pipeable
     */
    public function setNext(Pipeable $next): Pipeable;

    /**
     * 是否有下一個處理的步驟
     *
     * @return bool
     */
    public function hasNext(): bool;

    /**
     * @param int $number
     * @return int
     */
    public function process(int $number): int;
}
