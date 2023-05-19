<?php

if (!function_exists('array_rand_bias')) {

    /**
     * @param array $array The `source` array to pluck a value from.
     * @param string $default Will be returned when the array is provided empty.
     * @return mixed The plucked value from the source array.
     */
    function array_rand_bias(array &$array, string $default = ""): mixed
    {
        if (empty($array)) {
            return $default;
        }

        $m = (count($array)-1);
        $score_total = (mt_rand(0, 100) + mt_rand(0, 100));

        $index = match (true) {
            (mt_rand(0, 100) < 30) || $score_total > 120 => 0,
            (mt_rand(0, 100) < 40) || $score_total > 100 && $m < 3 => mt_rand(0, 1),
            (mt_rand(0, 100) < 50) || $score_total > 80 && $m < 4 => mt_rand(0, 2),
            default => mt_rand(0, $m),
        };

        return array_values($array)[$index];
    }
}
