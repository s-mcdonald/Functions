<?php

use function SamMcDonald\Functions\array_rand_pluck;

include_once '../vendor/autoload.php';

$array = [
    'David',
    'Matthew',
    'Mark',
    'James',
    'John',
    'Paul',
    'Anthony',
    'William',
    'Christopher',
    'Steven',
    'Richard',
    'Benjamin',
    'Charles',
    'George',
];

$randomValue = array_rand_pluck($array, 5);

var_dump($randomValue);

echo  PHP_EOL;
