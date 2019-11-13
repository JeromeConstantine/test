<?php
namespace mockingjay;
class config {
    function connect() {
      $link = mysqli_connect("localhost:8889","root","root","cinitick_expo_demo");
      return $link;
    }
}
?>