<?php

declare(strict_types=1);

use function SamMcDonald\Functions\array_entry_exist;

include_once '../vendor/autoload.php';


$array = [
    'foo' => 'bar',
    'buz' => 'dul'
];


if(array_entry_exist($array, 'foo', 'bar')) {
    echo "The key exist via the function.", PHP_EOL;
}

if (isset($array['foo']) && $array['foo'] === 'bar') {
    echo "The key exist via the traditional way.", PHP_EOL;
}

echo  PHP_EOL;
