<?php
use PHPUnit\Framework\TestCase;
class AddTest extends TestCase
{
    public function testAddition()
    {
        $a = 5;
        $b = 5;
        $c = $a + $b; 
        $this->assertEquals($c, 10);
    }
}
?>