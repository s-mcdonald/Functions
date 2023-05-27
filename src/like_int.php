<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('like_int')) {

    function like_int($int): bool
    {
        if (!is_scalar($int)) {
            return false;
        }

        return is_int($int) || (string) (int) $int === $int;
    }
}
