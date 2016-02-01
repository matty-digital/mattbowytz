<?php
class Foo
{
   // Just like in Java, PHP allows private, protected and public declarations
   // for instance variables and methods.  The ideas of these in PHP is very
   // similar to those in Java
   private $x; 
   protected $y;
   public $z;

   // Constructor method -- implicitly called when the new operator is used
   // to create a new instance of a Foo.
   public function __construct($newX, $newY, $newZ)
   {
     $this->x = $newX;
     $this->y = $newY;
     $this->z = $newZ;
   }

   // Destructor method -- implicitly called right before an object is
   // destroyed.  This can be used to "clean up" an object that may be
   // accessing other resources.
   function __destruct()
   {
     echo "Oh no!  Foo ", $this, " being destroyed! <br/>";
   }
     
   public function setX($data)
   {
      echo "Setting x to $data <br/>";
      //$x = $data; // unlike in Java, there is no implicit access
                     // of instance variables in PHP.  You need to 
                     // use the "this" reference
      $this->x = $data;
   }

   public function getX()
   {
      return $this->x;
   }

   public function setY($data)
   {
      echo "Setting y to $data <br/>";
      $this->y = $data;
   }

   public function getY()
   {
      return $this->y;
   }

   // Method to return a string version of a Foo object.  Like toString()
   // in Java this is called implicitly when accessing the object in a
   // string context
   public function __toString()
   {
      $ans = "x = " . $this->x . " and y = " . $this->y;
      $ans .= " and z = " . $this->z;
      return $ans;
   }
}
?>
