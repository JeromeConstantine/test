<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase{

    public function testNotEmpty()
    {
        $email ='Jerome';
        $password  ='12345';
        $this->assertNotEmpty($email);
        $this->assertNotEmpty($password);
        return [$email ,$password];
    }
    public function testEmpty()
    {
        $email ='';
        $password  ='';
        $this->assertEmpty($email);
        $this->assertEmpty($password);
    }
     
    /**
     * @dataProvider testNotEmpty
     */

    public function testSignIn($email,$password){

    $this->assertEquals($email , 'Jerome');

    $this->assertEquals($password , '12345');
    
    }
  
}
?>