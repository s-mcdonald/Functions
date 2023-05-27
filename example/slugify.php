<?php

declare(strict_types=1);

use function SamMcDonald\Functions\slugify;

include_once '../vendor/autoload.php';

$string = "My friends long weekend at Bernie's";

if($slug = slugify($string, '.')) {
    echo sprintf(
        "The Slug: %s",
        $slug
    ) ,
    PHP_EOL;
}

echo  PHP_EOL;
