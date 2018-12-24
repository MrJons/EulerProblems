<?php

namespace src;

class Solution1
{
    /**
     * Calculates sum of multiples of 3 & 5 below given number
     *
     * @param $below - Number to find multiples of 3 & 5 under
     * @return int
     */
    public static function calculate($below): int
    {
        static::checkPositive($below);
        return array_sum(static::getMultiples($below));
    }

    /**
     * Finds multiples of 3 & 5 below provided limit
     *
     * @param $below
     * @return array
     */
    protected static function getMultiples($below): array
    {
        $multiples = [];

        for ($i = 1; $i < $below; $i++) {
            if ($i % 3 == 0 || $i % 5 == 0) {
                $multiples[] = $i;
            }
        }

        return $multiples;
    }

    /**
     * Throws an exception if an input value below 0 has been provided
     *
     * @param $input
     */
    protected static function checkPositive($input)
    {
        if ($input < 0) {
            throw new \InvalidArgumentException("Given value must be above 0");
        }
    }
}