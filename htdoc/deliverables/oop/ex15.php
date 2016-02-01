<?php
   // This function will load any class files we need
   function __autoload($class) {
	require_once $class . '.php';
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example 15</title>
</head>
<body>
<?php
  //  Polymorphism and Interfaces in PHP.
      $A[] = new Animal("Herb");
      $A[] = new Animal("Abner");
      $A[] = new Bird("Tweety");
      $A[] = new Fish("Nemo","Fresh Water");
      $A[] = new Shark("Lenny","Salt Water");

      foreach ($A as $animal):
	  echo "$animal<br/>";
	  $animal->characteristics();
      $animal->move();
	  // Note below, that, unlike Java, we do not have to cast
	  // the reference to type Fish, since the type is automatically
	  // taken from the object.  However, if we just try to access
          // the getWaterType() method without first checking if the
          // object is an instanceof Fish, it will cause an error.
	  if ($animal instanceof Fish)
	      echo "My water is " . $animal->getWaterType() . "<br/>";
	  // We can use the Comparable interface to compare objects
	  foreach ($A as $r):
	      $ans = $animal->compareTo($r); 
	      if ($ans == 0)
		 echo "$animal is equal to $r<br/>";
	      else if ($ans > 0)
		 echo "$animal is greater than $r<br/>";
	      else
		 echo "$animal is less than $r<br/>";
	  endforeach;
	  echo "<br/>";
      endforeach;
      echo "<br/>";
      // However, to sort, we need a comparator that takes two objects as
      // arguments, so as to work with the usort framework.  Note the
      // somewhat odd syntax below.  The second argument to the usort
      // function is actually an array with the class name and method name
      // as a pair.  This is needed if the comparator is a method within
      // a class.
      usort($A, array('Animal', 'compare'));
      echo "Output in sorted order:<br/>";
      foreach ($A as $animal):
	  echo "$animal<br/>";
      endforeach;
      echo "<br/>";

      usort($A, array('Animal', 'compareTwo'));
      echo "Output in sorted order:<br/>";
      foreach ($A as $animal):
	  echo "$animal<br/>";
      endforeach;
      echo "<br/>";

      // We can call static methods using the scope resolution operator
      Animal::wacky();

      // Objects are automatically destructed at the end of the script, so
      // uncommenting the line below will have no effect
      //unset($A);
?>
</body>
</html>
