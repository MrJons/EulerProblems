<?php

require_once './problem6/src/solution6.php';

use PHPUnit\Framework\TestCase;
use src\Solution6;

class Solution6Test extends TestCase
{
    public function testGetSquaredDifference10()
    {
        $answer = Solution6::getSquaredDifference(10);
        $this->assertEquals(2640, $answer);
    }

    public function testGetSquaredDifference100()
    {
        $answer = Solution6::getSquaredDifference(100);
        $this->assertEquals(25164150, $answer);
    }
}
