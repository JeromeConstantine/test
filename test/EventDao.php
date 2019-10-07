<?php
class EventDao {
  private $_pdo;
 
  public function __construct(PDO $pdo) {
    $this->_pdo = $pdo;
  }
 
  public function findById() {
    $sql = 'SELECT * FROM events WHERE ...';
 
    //Instead of event repository, the code to execute SQL is here.
    //We then return the row's data as an array
  }
 
  /* some other methods here */
}