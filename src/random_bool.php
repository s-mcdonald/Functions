<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('random_bool')) {

    /**
     * @param int $RETURN_TYPE Use `0` or default input for boolean result, or `1` for the
     *        string `true` or `false` result.
     */
    function random_bool(int $RETURN_TYPE = 0): bool|string
    {
        try {
            $value = random_int(0, 1);
            if ($RETURN_TYPE === 0) {
                return (bool) $value;
            }
            return ($value === 0) ? 'true' : 'false';
        } catch (\Exception $e) {
            return false;
        }
    }
}
