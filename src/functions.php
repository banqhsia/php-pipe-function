<?php

use App\Operand;

/**
 * Operator functions
 */

/**
 * Increases the given number by 1.
 *
 * @param int $number
 * @return int
 */
function increase(int $number): int
{
    return Operand::increase(...func_get_args());
};

/**
 * Decreases the given number by 1.
 *
 * @param int $number
 * @return int
 */
function decrease(int $number): int
{
    return Operand::decrease(...func_get_args());
};

/**
 * Squares the given number.
 *
 * @param int $number
 * @return int
 */
function square(int $number): int
{
    return Operand::square(...func_get_args());
};

/**
 * Applies the given functions to the number recursively.
 *
 * @param int $number
 * @param callable ...$functions
 * @return int
 */
function pipe(int $number, callable ...$functions)
{
    foreach ($functions as $function) {
        $number = $function($number);
    }

    return $number;
}
