<!--   Polymorphism is essentially an OOP pattern that enables numerous classes with different functionalities to execute or share a commonInterface. The usefulness of polymorphism is code written in different classes doesn't have any effect which class it belongs because they are used in the same way.   -->

<?php
   interface Machine {
      public function calcTask();
   }
   class Circle implements Machine {
      private $radius;
      public function __construct($radius){
         $this -> radius = $radius;
      }
      public function calcTask(){
         return $this -> radius * $this -> radius * pi();
      }
   }
   class Rectangle implements Machine {
      private $width;
      private $height;
      public function __construct($width, $height){
         $this -> width = $width;
         $this -> height = $height;
      }
      public function calcTask(){
         return $this -> width * $this -> height;
      }
   }
   $mycirc = new Circle(3);
   $myrect = new Rectangle(3,4);
   echo $mycirc->calcTask();
   echo $myrect->calcTask();
?>