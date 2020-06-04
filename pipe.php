<?php

use App\Operands\Increment;

require_once __DIR__ . "/bootstrap.php";

// 49
echo pipe(5, 'increase', 'increase', 'square');

$increment = new Increment;

$increment
    ->setNext(new Increment)
    ->setNext(new Increment);

// 8
echo $increment->calculate(5);
