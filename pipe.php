<?php

require_once __DIR__ . "/bootstrap.php";

use App\Operands\Square;
use App\Operands\Increment;

/*****************************************************
 * Legacy pipe function implementation.
 ****************************************************/
echo pipe(5, 'increase', 'increase', 'square') . PHP_EOL;
/** 49 */

/*****************************************************
 * Chain of responsibility implementation.
 ****************************************************/
$increment = new Increment;

$increment
    ->setNext(new Increment)
    ->setNext(new Square);

echo $increment->calculate(5) . PHP_EOL;
/** 49 */
