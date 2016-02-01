<?php
class Shark extends Fish
{
   public function __construct($n, $w)
   {
     parent::__construct($n,$w);
   }

   public function __destruct()
   {
     parent::__destruct();
     echo "Oh no, I am losing my teeth";
   }

   public function characteristics()
   {
      parent::characteristics();
      echo "I am carnivorous<br/>";
   }
}
?>
