<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('number_flip')) {

    function number_flip(float|int $number): int|float
    {
        return $number * -1;
    }
}
