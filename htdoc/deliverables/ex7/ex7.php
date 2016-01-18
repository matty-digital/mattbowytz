<!DOCTYPE html>
<html>
 <head>
  <title>CS 1520 -- Seventh PHP Example</title>
 </head>
 <body>
 <?php
 /* Short intro to PHP Arrays and accessing them */

  include("display.php");  // include a file with some output functions

  $a0 = "wacky";       // $a0 is a string
  showa($a0);
  $a0[0] = "wacky";    // Note the odd behavior here
  $a0[1] = "zany";
  $a0[2] = "silly";
  $a0[10] = "reallywacky";
  $a0[20] = "funstuff!";
  showa($a0);
  unset($a0);          // set $a0 back to null
  var_dump($a0);
  showa($a0);
  $a0[0] = "wacky";    // This time array indexing works correctly
  $a0[1] = "silly";
  $a0[2] = "zany";
  $a0[wacky] = "syntax error";
  showa($a0);
  echo "<br/>\n";

  // Let's look at some different arrays and how they are accessed
  // Note that $a1 and $a2 below have identical keys and values.
  // However, the actual arrays are not identical -- see output
  $a1 = array(10, 20, 30, 40, 50);
  $a2 = array(2=>30, 4=>50, 0=>10, 3=>40, 1=>20);

  // $a3, $a4 and $a5 have "non-traditional" keys, at least for Java or
  // C++ programmers.  Be careful when using these types of keys
  $a3 = array(9=>10, 10=>20, 11=>30, 12=>40, 13=>50);
  $a4 = array("zero"=>10, "one"=>20, "two"=>30, "three"=>40, "four"=>50);

  $a6 = array("2"=>30, "4"=>50, "0"=>10, "3"=>40, "1"=>20);

  // Iterate using the foreach loop.  Note the orderings.
  showa($a1); showa($a2); showa($a3); showa($a4); showa($a5); 
  showa($a6);

  // Iterate using "traditional" for loop.  Note some missing values.
  showb($a1); showb($a2); showb($a3); showb($a4); showb($a5);
  showb($a6);

  // The print_r function will print out all of the contents of a PHP
  // array.  
  print_r($a1); echo "<br/>\n";
  print_r($a2); echo "<br/>\n";
  print_r($a3); echo "<br/>\n";
  print_r($a4); echo "<br/>\n";
  print_r($a5); echo "<br/>\n";
  echo "<br/>\n";

  echo "<hr/>\n";
  unset($a1);
  echo "\$a1 is: $a1 <br/>\n";
  // If we assign a variable with empty brackets, it appends a value
  // to the end of the array
  $a1[] = "here";
  $a1[] = "are";
  // The array_push function also adds to the end
  // There are MANY more PHP array functions.  See:
  // http://php.net/manual/en/ref.array.php
  array_push($a1, "the", "values");
  print_r($a1);  echo "<br/>\n";
 ?>
 </body>
</html>
