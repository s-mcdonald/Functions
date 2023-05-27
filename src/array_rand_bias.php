<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('array_rand_bias')) {

    /**
     * @param array $array The `source` array to pluck a value from.
     * @param string $default Will be returned when the array is provided empty.
     * @return mixed The plucked value from the source array.
     */
    function array_rand_bias(array &$array, string $default = "")
    {
        if (empty($array)) {
            return $default;
        }

        $m = (count($array)-1);
        $score_total = (mt_rand(0, 100) + mt_rand(0, 100));

        switch (true) {
            case (mt_rand(0, 100) < 30) || $score_total > 180:
                $index = 0;
                break;
            case (mt_rand(0, 100) < 40) || $score_total > 100 && $m < 3:
                $index = mt_rand(0, 1);
                break;
            case (mt_rand(0, 100) < 50) || $score_total > 80 && $m < 4 :
                $index = mt_rand(0, 2);
                break;
            default:
                $index = mt_rand(0, $m);
                break;
        };

        return array_values($array)[$index];
    }
}
