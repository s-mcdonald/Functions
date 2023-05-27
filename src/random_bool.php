<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('random_bool')) {

    /**
     * @param int $RETURN_TYPE Use `0` or default input for boolean result, or `1` for the
     *        string `true` or `false` result.
     */
    function random_bool(int $RETURN_TYPE = 0)
    {
        $value = mt_rand(0,1);

        return ($RETURN_TYPE === 1) ? $value === 0 ? 'false' : 'true' :  $value;
    }
}
