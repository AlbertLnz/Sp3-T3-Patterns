<?php

  include 'tigger.php';

  $tigger = Tigger::getInstance();

  $tigger->roar();
  $tigger->roar();
  $tigger->roar();
  $tigger->roar();

  echo "\nNums of roar's: ".$tigger->getCounter();

?>