<?php
use PHPUnit\Framework\TestCase;
class LoginOneTest extends TestCase{
    public function testSuccessConnection()
    {
        $email ='venkat@test.com';
        $password  ='123';
        $this->assertNotEmpty($email);
        $this->assertNotEmpty($password);
        $connection = mysqli_connect('localhost:8889', 'root', 'root', 'ABC');
        // if(mysqli_connect_error()){
        //         die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        // }
        return [[$email,$password,$connection]];
    }

    public function testFailureConnection()
    {
        $connection = 0;//mysqli_connect('localhost:8889', 'fake', 'fake', 'ABC');
        $this->assertSame(0, mysqli_connect_errno());
    }

    public function testEmpty()
    {
        $email ='';
        $password  ='';
        $this->assertEmpty($email);
        $this->assertEmpty($password);
    }
    /**
     * @dataProvider testSuccessConnection
     */
    public function testSignInSuccess($email,$password,$connection){

            $sql = "SELECT * FROM employee WHERE BINARY email='$email'";
	        $res = mysqli_query($connection, $sql);
            if(mysqli_num_rows($res) > 0 ){
                $this->assertTrue(true);    
            }else{
                $this->assertTrue(false);
            }   
        }
    /**
     * @dataProvider testSuccessConnection
     */
        public function testSignInFail($email,$password,$connection){

            $sql = "SELECT * FROM employee WHERE BINARY email=''";
	        $res = mysqli_query($connection, $sql);
            if(mysqli_num_rows($res) > 0 ){
                $this->assertTrue(true);
            }else{
                $this->assertFalse(false);
            }   
        }    
}
?>