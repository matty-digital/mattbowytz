<?php
class Fish extends Animal 
{
   private $water;

   public function __construct($n, $w)
   {
     parent::__construct($n);
     $this->water = $w;
   }

   public function __destruct()
   {
     echo get_class($this) . " " . $this . " has sunk!<br/>";
     parent::__destruct();
   }
     
   public function characteristics()
   {
      parent::characteristics();
      echo "I have fins<br/>";
      echo "I like $this->water<br/>";
   }

   public function move()
   {
      echo "I swim<br/>";
   }

   public function getWaterType()
   {
      return $this->water;
   }
}
?>
