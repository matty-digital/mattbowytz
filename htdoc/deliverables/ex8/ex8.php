<!DOCTYPE html>
<html>
 <head>
  <title>CS 1520 -- Eighth PHP Example</title>
 </head>
 <body>
 <?
   /* More on PHP Arrays and accessing them */
   # As an experiment, change one of the values in the array to 0 -- you
   # will see that the first iteration below stops at that point, but the
   # second continues correctly
   $a1 = array(40, 10, 50, 30, 20);

   $curr = current($a1);
   while ($curr):
     echo "\$curr is $curr <br/>\n";
     $curr = next($a1);
   endwhile;

   # Once we have iterated on the array, to do so again we need to reset
   # it first, as shown below.
   reset($a1);
   while ($curr = each($a1)):
     $k = $curr["key"];
     $v = $curr["value"];    
     echo "key is $k and value is $v <br/>\n";
   endwhile;

   # The code segment below will lead to an "infinite" loop since we are
   # always adding on to the end of the array and thus never actually
   # get to the end.  In reality we will eventually get a memory error
   # since the array will grow too large to store. 
   /*
   echo "About to do bogus segment <br />";
   reset($a1);
   $curr = current($a1);
   while ($curr):
       echo "\$curr is $curr <BR />\n";
       $curr = next($a1);
       $a1[] = $curr+1;
   endwhile;
   echo "<hr/>\n";
   */

   echo "<hr/>\n";
   
  // Same array values as in ex7.php
  $a1 = array(10, 20, 30, 40, 50);
  $a2 = array(2=>30, 4=>50, 0=>10, 3=>40, 1=>20);
  $a3 = array(9=>10, 10=>20, 11=>30, 12=>40, 13=>50);
  $a4 = array("zero"=>10, "one"=>20, "two"=>30, "three"=>40, "four"=>50);
  $a5 = array("zero"=>10, 1=>20, 2=>30, "three"=>40, 4=>50);

  // Add a new array with some mixed data 
  $a6 = array("50", "200", 30, "75", 0, "wacky",10, 1234, 80, "and", 40, '80', 60, -2, "bogus", "aardvark", 0);
  $a7 = $a6;
  $a8 = $a6;
  $a9 = $a6;

  // Unlike Java (which assigns a reference), PHP arrays are copied
  // with assignment, so changing a value in one copy does not affect
  // the other. 
  $a9[1] = "nutty";
  print_r($a6);  echo "<br/>\n";
  print_r($a9);  echo "<br/>\n";
  echo "<hr/>\n";

  // However, we can explicitly assign by reference in PHP if we want
  // also.  This acts similarly to a Java reference, so now if the data
  // via one variable is changed, it affects the other.
  $a10 =& $a9; 
  $a10[1] = "inconceivable";
  print_r($a9);  echo "<br/>\n";
  print_r($a10);  echo "<br/>\n";
  echo "<hr/>\n";

  echo "ORIGINAL DATA: <br/>";
  print_r($a1);  echo "<br/>\n";
  print_r($a2);  echo "<br/>\n";
  print_r($a3);  echo "<br/>\n";
  print_r($a4);  echo "<br/>\n";
  print_r($a5);  echo "<br/>\n";
  print_r($a6);  echo "<br/>\n";
  echo "<br/>\n";
  
  // There are a few sorting functions in PHP.  The regular sort
  // function will sort non-numeric strings alphabetically between
  // themselves, will sort numbers and numeric strings numerically
  // between themselves, and will consider non-numeric strings to be
  // 0 when compared to numeric strings or numbers.  This can be a 
  // bit odd so be careful when using it with mixed data.  See $a6
  // for an example.

  // asort sorts normally, but does not alter the original key values
  // (normal sort converts key values to integer indexes starting a 0)
  sort($a1);  sort($a2);  sort($a3);  sort($a4);  asort($a5);

  echo "SORTED DATA: <br/>";

  print_r($a1);  echo "<br/>\n";
  print_r($a2);  echo "<br/>\n";
  print_r($a3);  echo "<br/>\n";
  print_r($a4);  echo "<br/>\n";
  print_r($a5);  echo "<br/>\n";

  echo "<hr/>\n";
  sort($a6);
  print_r($a6);  echo "<br/>\n";
  foreach ($a6 as $value):
    echo gettype($value), " ";
  endforeach;
  echo "<br/>\n";
  echo "<hr/>\n";

  // We can force the sort to be "numeric" or "string" by using the
  // appropriate flags.  However, if a string cannot represent a number,
  // it is considered to be 0 in SORT_NUMERIC.  If you compare the output
  // for regular sort and SORT_NUMERIC on the data here, you will notice
  // an interesting difference.  In the regular sort, non-numeric strings
  // are compared to each other alphabetically, but for NUMERIC, they are
  // considered to be 0 in all cases.

  // Note also that PHP sorting is NOT STABLE.  We will discuss this in
  // lecture.  We will look at an example of this once we discuss classes
  // and objects.  See also:
  // http://en.wikipedia.org/wiki/Sorting_algorithm#Stability
  sort($a7, SORT_NUMERIC);
  sort($a8, SORT_STRING);
  echo "Sorted NUMERIC:<br/>\n";
  print_r($a7);  echo "<br/>\n";
  echo "Sorted ALPHA: <br/>\n";
  print_r($a8);  echo "<br/>\n";
 ?>
 </body>
</html>