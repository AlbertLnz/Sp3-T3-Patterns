<?php

  class Tigger{ //Singleton

    private static $instance;
    private $counter;

    private function __construct(){
      echo "Building character...".PHP_EOL;
    }

    public static function getInstance(){
      if(!isset($instance)){ // == if(self::$instance == null)
        $instance = new Tigger();
      }
      return $instance;
    }

    public function roar(){
      echo "Grrr!".PHP_EOL;
      $this->counter++;
    }

    public function getCounter(){
      return $this->counter;
    }

  }

?>