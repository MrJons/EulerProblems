<?php

namespace src;

class Solution6
{
    /**
     * Calculates difference between square of sum of limit and sum of square of limit
     *
     * @param int $limit
     * @return int
     */
    public static function getSquaredDifference(int $limit): int
    {
        return static::squareOfSum($limit) - static::sumOfSquared($limit);
    }

    /**
     * Calculate square of sum of limit
     *
     * @param int $limit
     * @return int
     */
    protected static function squareOfSum(int $limit): int
    {
        $sum = 0;
        for ($num = 1; $num <= $limit; $num++) {
            $sum += $num;
        }
        return pow($sum, 2);
    }

    /**
     * Calculate sum of square of limit
     *
     * @param int $limit
     * @return int
     */
    protected static function sumOfSquared(int $limit): int
    {
        $sum = 0;
        for ($num = 1; $num <= $limit; $num++) {
            $sum += pow($num, 2);
        }
        return $sum;
    }
}