<?php

namespace src;

class Solution5
{
    public static function getSmallestMultipleInRange(int $smallest, int $largest): int
    {
        $answer = null;
        $multiple = $largest;

        while ($answer == null) {

            for ($i = $smallest; $i <= $largest; $i++) {
                if ($multiple % $i != 0) {
                    break;
                }

                if ($i == $largest) {
                    $answer = $multiple;
                }
            }

            $multiple += $largest;
        }

        return $answer;
    }
}