<?php

require_once __DIR__ . "/bootstrap.php";

// 49
echo pipe(5, $increment, $increment, $square);
