<?php

require_once './problem5/src/solution5.php';

use PHPUnit\Framework\TestCase;
use src\Solution5;

class Solution5Test extends TestCase
{
    public function testGetSmallestMultipleInRange1To10()
    {
        $answer = Solution5::getSmallestMultipleInRange(1, 10);
        $this->assertEquals(2520, $answer);
    }

    public function testGetSmallestMultipleInRange1To20()
    {
        $answer = Solution5::getSmallestMultipleInRange(1, 20);
        $this->assertEquals(232792560, $answer);
    }
}