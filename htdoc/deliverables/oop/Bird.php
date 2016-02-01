<?php
class Bird extends Animal 
{
   public function __construct($n)
   {
     parent::__construct($n);
     //Animal::__construct($n);
   }

   function __destruct()
   {
     echo get_class() . " " . $this . " has been grounded! <br />";
     parent::__destruct();
   }
     
   public function characteristics()
   {
      parent::characteristics();
      echo "I have feathers<br/>";
   }

   public function move()
   {
      //parent::move();
      echo "I fly<br/>";
   }
}
?>
