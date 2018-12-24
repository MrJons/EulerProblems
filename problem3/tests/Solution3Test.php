<?php

require_once './problem3/src/solution3.php';

use PHPUnit\Framework\TestCase;
use src\Solution3;

class Solution3Test extends TestCase
{
    public function testLargestPrimeFactor()
    {
        $answer = Solution3::getLargestPrimeFactor(13195);
        $this->assertEquals(29, $answer);
    }
}