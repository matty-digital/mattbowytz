<?php
// CS 1520 Class Example

class Animal implements Comparable 
{
   private $name;

   public function __construct($n)
   {
     $this->name = $n;
   }

   function __destruct()
   {
     echo get_class($this) . " " .  $this, " being destroyed! <br />";
   }
     
   public function characteristics()
   {
      echo "I am alive<br/>";
   }

   public function move()
   {
      echo "I move<br/>";
   }

   public function __toString()
   {
      $ans = "My name is " . $this->name . " and I am a " . get_class($this);
      return $ans;
   }

   // This method will satisfy the Comparable interface.  However, unlike
   // with Java, predefined sorts will not work with this.  In order to have
   // a predefined sort work with a programmer-defined compare method, we 
   // must use a comparator, as shown below.
   public function compareTo($r)
   {
      return strcmp($this->name, $r->name);
   }


   // This static method accepts two object parameters, and returns the result
   // of the comparision between the two.  This can be used to sort an array
   // of objects with the comparator of choice.  See also ex15.php
   public static function compare($a, $b)
   {
      return strcmp($a->name, $b->name);
   }

   public static function compareTwo($a, $b)
   {
      return strcmp($b->name, $a->name);
   }


   public function wacky()
   {
      echo "This is the wackiest thing ever!!!<br/>";
   }
}
?>
