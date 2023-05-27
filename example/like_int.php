<?php

declare(strict_types=1);

use function SamMcDonald\Functions\like_int;

include_once '../vendor/autoload.php';

$like_int = "55";

if(like_int($like_int)) {
    echo "Yes this is could certainly be cast to an int.", PHP_EOL;
}

echo  PHP_EOL;
