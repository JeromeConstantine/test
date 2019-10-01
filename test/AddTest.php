<?php
use PHPUnit\Framework\TestCase;
class AddTest extends TestCase
{
    public function additionTest()
    {
        $a = 5;
        $b = 5;
        $c = $a + $b; 
        $this->assertEquals($c, 10);
    }
}
?>