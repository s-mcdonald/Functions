<?php

use function SamMcDonald\Functions\rand_bias;

include_once '../vendor/autoload.php';

echo "Default bias at 60% true" , PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . rand_bias() . PHP_EOL;
}

echo "Random bias at 70% true" , PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . rand_bias(70) . PHP_EOL;
}

echo  PHP_EOL;
