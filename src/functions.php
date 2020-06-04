<?php

/**
 * Operator functions
 */

/**
 * Increases the given number by 1.
 *
 * @param int $number
 * @return int
 */
function increment(int $number): int
{
    return $number + 1;
};

/**
 * Decreases the given number by 1.
 *
 * @param int $number
 * @return int
 */
function decrease(int $number): int
{
    return $number - 1;
};

/**
 * Squares the given number.
 *
 * @param int $number
 * @return int
 */
function square(int $number): int
{
    return pow($number, 2);
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
