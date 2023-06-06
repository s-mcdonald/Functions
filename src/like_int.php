<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

use Stringable;

if (!function_exists('like_int')) {

    function like_int(Stringable|string|int|float $value): bool
    {
        if (is_int($value)) {
            return true;
        }

        $strVal = (string) $value;

        if (!is_numeric($strVal) || $strVal === '')  {
            return false;
        }

       return ((float) $strVal == (int) $strVal);
    }
}
