<?php

require_once './problem1/src/solution1.php';

use PHPUnit\Framework\TestCase;
use src\Solution1;

class Solution1Test extends TestCase
{
    public function testSumOfMultiplesOf3And5()
    {
        $answer = Solution1::calculate(10);
        $this->assertEquals(23, $answer);
    }

    public function testSumOfMultiplesOf3And5Below1000()
    {
        $answer = Solution1::calculate(1000);
        $this->assertEquals(233168, $answer);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Given value must be above 0
     */
    public function testNegativeInputThrowsError()
    {
        Solution1::calculate(-10);
    }
}