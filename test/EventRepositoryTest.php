<?php
use PHPUnit\Framework\TestCase;
use EventDao;
class EventRepositoryTest {
    private $_dao;
 
    public function __construct(EventDao $dao) {
      $this->_dao = $dao;
    }
   
    public function findById($id) {
      $row = $this->_dao->findById($id);
      //Now we simply process $row into an Event object. No direct DB access
    }
    
    public function testFindsCorrectEvent() {
        //Set up a fake database row
        $eventRow = array(
          'id' => 1,
          'name' => 'Awesome event'
        );
       
        $dao = $this->getMock('EventDao');
       
        //Set up the mock to return the fake row when findById is called
        $dao->expects($this->once())
            ->method('findById')
            ->with(1)
            ->will($this->returnValue($eventRow));
       
        $repo = new EventRepository($dao);
       
        $event = $repo->findById(1);
       
        //Confirm ID of the returned Event is correct
        $this->assertEquals(1, $event->getId());
      }
  /* some other methods here */
}