<?php

require_once './problem2/src/solution2.php';

use PHPUnit\Framework\TestCase;
use src\Solution2;

class Solution2Test extends TestCase
{
    public function testSumOfFibonacciEvensToLimit89()
    {
        $answer = Solution2::sumOfFibonacciEvens(89);
        $this->assertEquals(44, $answer);
    }

    public function testSumOfFibonacciEvensToLimit()
    {
        $answer = Solution2::sumOfFibonacciEvens(4000000);
        $this->assertEquals(4613732, $answer);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Given value must be above 0
     */
    public function testNegativeInputThrowsError()
    {
        Solution2::sumOfFibonacciEvens(-89);
    }
}