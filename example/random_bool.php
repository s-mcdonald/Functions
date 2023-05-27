<?php

declare(strict_types=1);

use function SamMcDonald\Functions\random_bool;

include_once '../vendor/autoload.php';

echo random_bool(1);


echo "Random bool" , PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . random_bool() . PHP_EOL;
}


echo  PHP_EOL;
