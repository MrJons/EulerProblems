<?php

require_once './problem4/src/solution4.php';

use PHPUnit\Framework\TestCase;
use src\Solution4;

class Solution4Test extends TestCase
{
    public function testLargest2DigitPalindrome()
    {
        $answer = Solution4::getLargestPalindrome(10, 99);
        $this->assertEquals(9009, $answer);
    }

    public function testLargest3DigitPalindrome()
    {
        $answer = Solution4::getLargestPalindrome(100, 999);
        $this->assertEquals(906609, $answer);
    }
}