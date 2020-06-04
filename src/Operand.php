<?php

namespace App;

class Operand
{
    /**
     * Increases the given number by 1.
     *
     * @param int $number
     * @return int
     */
    public static function increase(int $number): int
    {
        return $number + 1;
    }

    /**
     * Decreases the given number by 1.
     *
     * @param int $number
     * @return int
     */
    public static function decrease(int $number): int
    {
        return $number - 1;
    }

    /**
     * Squares the given number.
     *
     * @param int $number
     * @return int
     */
    public static function square(int $number): int
    {
        return pow($number, 2);
    }
}
