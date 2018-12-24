<?php

namespace src;

class Solution3
{
    /**
     * @param int $num Number to find biggest prime factors of
     * @return array
     */
    public static function getLargestPrimeFactor($num = 600851475143): int
    {
        $primeFactors = [];

        for ($i = 2; $i <= ($num / 2); $i++) {
            if ($num % $i == 0 && static::isPrime($i)) {
                $primeFactors[] = $i;
            }
        }

        return end($primeFactors);
    }

    /**
     * Check if number is prime
     *
     * @param int $num
     * @return bool
     */
    protected static function isPrime(int $num): bool
    {
        for ($n = 2; $n <= $num - 1; $n++) {
            if ($num % $n == 0) {
                return false;
            }
        }
        return true;
    }
}
