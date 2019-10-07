<?php
use PHPUnit\Framework\TestCase;
class DependTest extends TestCase
{

    public function testEmpty()
    {
        $value = [];
        $this->assertEmpty($value);
        return $value;
    }
      /**
     * @depends testEmpty
     */
    public function testPush(array $val)
    {
        array_push($val, 'first');
        $this->assertEquals('first', $val[count($val) - 1]);
        $this->assertNotEmpty($val);
        return $val;
    }
}
?>