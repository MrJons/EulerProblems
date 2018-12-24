<?php

namespace src;

class Solution2
{
    /**
     * Finds the sum of the fibonacci values that are even and who do not exceed limit
     *
     * @param int $limit
     * @return int
     */
    public static function sumOfFibonacciEvens(int $limit = 4000000): int
    {
        static::checkPositive($limit);
        return array_sum(static::getFibonacciEvens($limit));
    }

    /**
     * Creates array of even Fibonacci numbers
     *
     * @param int $limit
     * @return array
     */
    protected static function getFibonacciEvens(int $limit): array
    {
        $n1 = 1;
        $n2 = 2;
        $evens = [2];

        while (($new = $n1 + $n2) <= $limit) {
            if ($new % 2 == 0) {
                $evens[] = $new;
            }
            $n1 = $n2;
            $n2 = $new;
        }

        return $evens;
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
