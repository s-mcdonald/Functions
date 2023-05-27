<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('rand_bias')) {

    function rand_bias(int $bias = 60): bool
    {
        $bias = ($bias > 0 && $bias < 100)? $bias : 60;

        return mt_rand(0,100) < $bias;
    }
}
