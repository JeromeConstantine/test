<?php
use PHPUnit\Framework\TestCase;
class LoginTest extends TestCase{
    public function testNotEmpty()
    {
        $email ='venkat@test.com';
        $password  ='123';
        $this->assertNotEmpty($email);
        $this->assertNotEmpty($password);
        $connection = mysqli_connect('localhost:8889', 'root', 'root', 'ABC');
            if(mysqli_connect_error()){
                die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
            }
        return [[$email,$password,$connection]];
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
    public function testSignIn($email,$password,$connection){

            $sql = "SELECT * FROM employee WHERE BINARY email='$email'";
	        $res = mysqli_query($connection, $sql);
            if($res){
                $this->assertTrue(true);    
            }else{
                $this->assertTrue(false);
            }   
        }
    /**
     * @dataProvider testNotEmpty
     */
        public function testSignUp($email,$password,$connection){

            $sql = "SELECT * FROM employee WHERE BINARY email='$email'";
	        $res = mysqli_query($connection, $sql);
            if($res){
                $this->assertTrue(true);    
            }else{
                $this->assertTrue(false);
            }   
        }    
}
?>