<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('array_rand_pluck')) {


    function array_rand_pluck(array &$array)
    {
        if (empty($array)) {
            return null;
        }

        return $array[array_rand($array, 1)];
    }
}
