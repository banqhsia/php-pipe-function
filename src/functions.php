<?php

/**
 * Operator functions
 */
$increment = function (int $number): int {
    return $number + 1;
};

$decrease = function (int $number): int {
    return $number - 1;
};

$square = function (int $number): int {
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
