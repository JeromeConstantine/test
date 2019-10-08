<?php
use PHPUnit\Framework\TestCase;
class MyGuestbookTest extends TestCase
{
  private function expectQueries($queries)
  {
    $mysqli = $this->getMockBuilder('mysqli')
      ->setMethods(array('query','real_escape_string'))
      ->getMock();
    $mysqli->expects($this->any())
      ->method('real_escape_string')
      ->will($this->returnCallback(function($str) { return addslashes($str); }));
    $mysqli->expects($this->any())
      ->method('query')
      ->will($this->returnCallback(function($query) use ($queries) {
        $this->assertTrue(isset($queries[$query]));
        $results = $queries[$query];
        $mysqli_result = $this->getMockBuilder('mysqli_result')
          ->setMethods(array('fetch_row','close'))
          ->disableOriginalConstructor()
          ->getMock();
        $mysqli_result->expects($this->any())
          ->method('fetch_row')
          ->will($this->returnCallback(function() use ($results) {
            static $r = 0;
            return isset($results[$r])?$results[$r++]:false;
          }));
        return $mysqli_result;
      }));
 
    return $mysqli;
  }
 
  public function testSomeSubjectThatUsesMysqli()
  {
    $mysqli = $this->expectQueries(array(
      "SELECT * FROM `table`" =>array(array('1','value1'),array('2','value2'),array('3','value3')),
      "SELECT * FROM `table` LIMIT 2" =>array(array('1','value1'),array('2','value2')),
      // other queries that may be called
    ));
    // do something that uses $mysqli

    $result = $mysqli->query("SELECT * FROM `table`");
    while ($row = $result->fetch_row()) {
    
        //$this->assertEquals($row[1] , array(array('1','value1'),array('2','value2')));
   // do something with the data in $row
    }
    //$this->assertEquals($row, array(array('1','value1')));
    $result->close();
  }
 
}
?>