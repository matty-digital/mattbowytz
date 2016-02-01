<?php
// CS 1520 User class for usesession-oop.php handout

class User
{
   private $name;
   private $street;
   private $city;
   private $state;
   private $zip;

   public function __construct($n, $str, $c, $sta, $z)
   {
     $this->name = $n;
     $this->street = $str;
     $this->city = $c;
     $this->state = $sta;
     $this->zip= $z;
   }

   public function getName()
   {
     return $this->name;
   }

   public function __toString()
   {
      $ans = "Name: " . $this->name . "<br/>" .
             "Street: " . $this->street . "<br/>" .
             "City: " . $this->city . "<br/>" .
             "State: " . $this->state . "<br/>" .
             "Zip: " . $this->zip . "<br/>"; 
      return $ans;
   }
   
   public static function compare($a, $b)
   {
      return strcmp($a->name, $b->name);
   }

}
?>
