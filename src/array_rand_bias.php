<?php

if (!function_exists('array_rand_bias')) {

    /**
     * @throws Exception
     */
    function array_rand_bias(array &$array)
    {
        if (empty($array)) {
            throw new \Exception("Source array must have at least one value.");
        }

        $values = array_values($array);
        $m = (count($array)-1);
        $score1 = mt_rand(0, 100);
        $score2 = mt_rand(0, 100);
        $score_total = ($score1 + $score2);

        if (mt_rand(0, 100) < 30) {
            return $values[0];
        }

        if (mt_rand(0, 100) < 40) {
            return $values[
                mt_rand(0, 1)
            ];
        }

        $index = match (true) {
            $score_total > 90 => 0,
            $score_total > 80 && $m < 3 => $values[mt_rand(0, 1)],
            default => mt_rand(0, $m),
        };

        return $values[$index];
    }
}
