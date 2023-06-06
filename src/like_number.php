<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('like_number')) {

    function like_number($value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        return like_int($value) || like_float($value);
    }
}
