<?php
class DatabaseTest {
	private $connection;
	public function testconnect_db(){
		$this->connection = mysqli_connect('localhost:8889', 'root', 'root', 'ABC');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}

		// if($this->connection){
		// 	$this->assertTrue(true);    
		// }else{
		// 	$this->assertTrue(false);
		// }
	}
}

$database = new DatabaseTest();
$database->testconnect_db();

// date_default_timezone_set('Asia/Kolkata');
// session_start();
// $title = 'Cineworld';
// $link = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
// $conn = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
// $inventory_conn = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
// if(!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

?>
