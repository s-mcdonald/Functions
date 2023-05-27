<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('array_entry_exist')) {

    /**
     * @param $array array - The given array
     * @param $key mixed - The key to satisfy the condition
     * @param $value mixed - The value that should match the value of the array[key]
     */
    function array_entry_exist(array &$array, $key, $value): bool
    {
        return isset($array[$key]) && $array[$key] === $value;
    }
}
