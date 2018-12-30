<?php

namespace src;

class Solution4
{
    /**
     * Collate Palindromes in given range and return the highest.
     *
     * @param int $lowest
     * @param int $highest
     * @return int
     */
    public static function getLargestPalindrome(int $lowest, int $highest): int
    {
        $palindromes = [];

        for ($multiple1 = $highest; $multiple1 >= $lowest; $multiple1--) {
            for ($multiple2 = $highest; $multiple2 >= $lowest; $multiple2--) {
                $result = $multiple1 * $multiple2;
                if (static::isUniqueHighestPalindrome($result, $palindromes)) {
                    $palindromes[] = $result;
                    break;
                }
            }
        }

        sort($palindromes);
        return end($palindromes);
    }

    /**
     * If result is palindrome check to see if it is 1. unique, and 2. Higher than any palindromes currently recorded
     *
     * @param int $result
     * @param array $palindromes
     * @return bool
     */
    protected static function isUniqueHighestPalindrome(int $result, array $palindromes): bool
    {
        if (!static::isPalindrome($result)) {
            return false;
        }

        sort($palindromes);

        if (in_array($result, $palindromes) || $result <= end($palindromes)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Do the check to see if a multiple is a palindrome
     *
     * @param int $result
     * @return bool
     */
    protected static function isPalindrome(int $result): bool
    {
        $midLength = strlen($result)/2;
        $reverseFirstHalf = strrev(substr($result, 0, floor($midLength)));
        $secondHalf = substr($result, ceil($midLength));

        return $reverseFirstHalf == $secondHalf ? true : false;
    }

}

