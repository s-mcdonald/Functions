<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('digits')) {

    /**
     * @return false|array<int>
     */
    function digits(string|float|int $value): false|array
    {
        return (!is_numeric($value)) ? false : array_values(array_map(
            static function ($v) {
                return (int) $v;
            },
            array_filter(str_split((string) $value), static function ($v) {
                return trim($v . '') !== '.';
            }, ARRAY_FILTER_USE_BOTH)
        ));
    }
}
