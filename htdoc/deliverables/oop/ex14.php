<?php
   // This function will load any class files we need.  This is handy because
   // it keeps us from having to remember all of the classes used and from
   // making sure that we don't load files more than one time.
   function __autoload($class) {
	require_once $class . '.php';
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example 14</title>
</head>
<body>
<?php
  //  Some simple OOP in PHP.
      // Creating a new object looks a lot like Java
      $fooVar = new Foo(77, 88, 99);

      // When using the object in a String context, the "magic" toString()
      // method will implicitly be called.  See Foo.php.
      echo "fooVar is ", $fooVar, "<br/>";

      // Unlike Java (but like C++) we use the arrow notation rather than the
      // "dot" notation to access methods and data within an object
      $fooVar->setX(70);
      $fooVar->setY(80);
      // Since z is public, we can access it directly if we wish.  As with
      // other OO languages, this is typically not advisable.
      echo "Changing z to 90 with direct access</br>";
      $fooVar->z = 90;
      echo "fooVar is ",  $fooVar, "<br/>";

      $subFooVar = new SubFoo(22, 33, 44, 55);
      echo "subFooVar is ", $subFooVar, "<br/>";

      // We can access setX and setY via inheritance
      $subFooVar->setX(20);
      $subFooVar->setY(30);
      echo "Changing z to 40 with direct access</br>";
      $subFooVar->z = 40;
      $subFooVar->setSub(50);
      echo "subFooVar is ", $subFooVar, "<br/>";

      echo "x field is " . $subFooVar->subGetX() . "<br/>";
      echo "y field is " . $subFooVar->subGetY() . "<br/>";
      echo "<br/>";
      // "Kind of" polymorphic access.  Note that we are mixing a subclass
      // object and a superclass object.  However, unlike with Java, in PHP
      // the variable itself does not have a type until assigned a value.
      echo "Iterating through object array:<br/>";
      $fooArray = array($fooVar, $subFooVar);
      foreach ($fooArray as $val):
         echo "val is ",  $val, "<br/>";
         echo "type is ", get_class($val), "<br/>";
      endforeach;
      echo "<br/>";
      echo "Unsetting fooVar<br/>";
      unset($fooVar);
      echo "Nothing destroyed yet, since array is also storing refs <br/>";
      unset($fooArray);
      echo "Foo object is now gone... <br/>";
      echo "<br/>";
      echo "Program about to terminate... <br/>";
?>
</body>
</html>
