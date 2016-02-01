<?php
class SubFoo extends Foo
{
   // Inherits $x, $y and $z from Foo.  Adding $sub in the subclass
   private $sub;

   // The parent keyword is similar to "super" in Java.  It allows a subclass
   // to access the superclass version of an overridden method.  In PHP it is
   // also legal to specify the base class directly (see commented code below)
   // but it is better practice to use parent, so that methods are not
   // dependent upon a specific class as the parent.
   public function __construct($newX, $newY, $newZ, $newSub)
   {
      parent::__construct($newX, $newY, $newZ);
      //Foo::__construct($newX, $newY, $newZ);
      $this->sub = $newSub;
   }
 
   public function __destruct()
   {
      parent::__destruct();
      echo "Look out!  SubFoo ", $this, " being destroyed! <br />";
   }

   // SubFoo cannot access x directly, but it can use the getX() method
   // which is inherited.
   public function subGetX()
   {
      //return $this->x; // this would be an error
      return $this->getX();
   }

   // SubFoo CAN access y directly, since it is protected
   public function subGetY()
   {
      return $this->y;
   }

   public function setSub($data)
   {
      echo "Setting Sub to $data <br />";
      $this->sub = $data;
   }

   public function __toString()
   {
      $ans = parent::__toString();
      return $ans . " and sub = " . $this->sub;
   }
}
?>
