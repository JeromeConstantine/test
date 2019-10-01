<?php
use PHPUnit\Framework\TestCase;

class LoginTest{


    public function testEmpty()
    {
        $email ='Jerome';
        $password  ='12345';
        $this->assertEmpty($email);
        $this->assertEmpty($password);
        return $value;
    }

    public function testsignin(){
    $this->assertEquals($email , 'Jerome');
    $this->assertEquals($password , '12345');
    }
  
}
?>