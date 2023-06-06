<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

use Stringable;

if (!function_exists('like_float')) {

    function like_float(Stringable|string|int|float $value): bool
    {
        if (is_float($value)) {
            return true;
        }

        $strVal = (string) $value;

        if (!is_numeric($strVal) || $strVal === '')  {
            return false;
        }

        return ((float) $strVal > (int) $strVal);
    }
}
