<?php

//Encapsulation =>Enclose within a capsule

Class Person 
{
      public $name;

      public function __construct($name)
      {
          $this->name=$name;
      }
      public function job()
      {

      }
      public function favoriteTeam()
      {
          
      }
      private function thingsThatKeepUpAtNight()
      {
        return 'die';
      }
}

$bob = new Person('Bob');

var_dump($bob->thingsThatKeepUpAtNight());

$method = new \ReflectionMethod(Person::class,'thingsThatKeepUpAtNight');
$method->setAccessible(true);
$person = new Person('Bob');

$method->invoke($person);