<!DOCTYPE html>
<html>
 <head>
  <title>CS 1520 -- Tenth PHP Example</title>
 </head>
 <body>
 <?php
  /* This handout demonstrates PHP functions, parameters and local
     variables.  It also utilizes arrays.
  */
     include("display.php");

     // Recursively output the contents of an array.  The recursion allows
     // the elements to be printed no matter what their nesting level.
     function showaRec($a, $level)
     {
         if (!is_array($a)):
            return;
         else:
            foreach ($a as $key=>$value):
               $buff = " ";
               for ($i = 0; $i < 6*$level; $i++) $buff .= "-";
               echo "$buff $key has value $value <br/>\n";
               if (is_array($value)):
                   showaRec($value, $level+1);
               endif;
            endforeach;
         endif;
     }
                   
     # Output two-d array in traditional "row column" format. 
     # This is identical to showMat from ex9.php 
     function showMat($a)
     {
         for ($i = 0; $i < count($a); $i++):
              for ($j = 0; $j < count($a[$i]); $j++):
                   echo $a[$i][$j], " ";
              endfor;
              echo "<br/>\n";
         endfor;
     }
      
     # Note the ampersand in the parameter declaration.  This indicates
     # that the parameter will be passed by REFERENCE.  Any change to the
     # parameter will be a change to the original variable

     # Although the parameter below is reference, the only changes are
     # through the loop control variable in the foreach loop.  Since in PHP
     # this variable is a copy, the net effect is that this function does
     # not alter the array
     function modify1(&$a)
     {
         if (is_array($a)):
            foreach ($a as $curr):
                if (is_int($curr) || is_float($curr)):
                      $curr = $curr + 1;
                else:
                      $curr .= "ing";
                endif;
            endforeach;
         endif;
     }

     # Accessing the array by index WILL change it, but in this case
     # the array is passed by value, so it is a copy and again does not
     # change the actual parameter
     function modify2($a)
     {
         if (is_array($a)):
            foreach ($a as $key=>$value):
                if (is_int($value) || is_float($value)):
                      $a[$key]=$value+1;
                else:
                      $a[$key]=$value . "ing";
                endif;
            endforeach;
         endif;
     }

     # Finally this version will actually alter the array, since the
     # parameter is reference and the array is accessed by index.
     # Note that arrays in PHP are NOT linearized (as they are in Perl)
     # so that the contents of any nested arrays are not automatically
     # modified.
     function modify3(&$a)
     {
         if (is_array($a)):
            foreach ($a as $key=>$value):
                if (is_int($value) || is_float($value)):
                      $a[$key]=$value+1;
                elseif (is_string($value)):
                      $a[$key]=$value . "ing";
                elseif (is_array($value)):
                      $a[$key]=$value + array("newKey" => "newItem");
                endif;
            endforeach;
         endif;
     }

     function globloc()
     {
     	 global $a1;
         $a1 = array("We", "have", "changed", "this", "array");
         $a2 = array("Is", "this", "one", "also", "changed");
         echo "In the function: <br/>\n";
         print_r($a1); echo "<br/>\n";
         print_r($a2); echo "<br/>\n";
     }
         
     // Initialize 3 arrays to the same data as in ex9.php
     $a1 = array(10, 20, 30, 40, 50);
     $a2 = array("here", "is", array("an", "array", array("with", "several"),
                                                    array("levels", "of")),
                               array("nesting", "it", "is"),
                 "quite", "wacky");
     $a3[0] = array(1,2,3,4);
     $a3[1] = array(5,6,7,8);
     $a3[2] = array(9,10,11,12);
     // showa is the same as in ex9.php
     showa($a1);  showa($a2);  showa($a3); 
     echo "<hr/>\n";

     // Now we can show all of the nested data via a recursive method
     showaRec($a2,0);
     echo "<br/>\n";
     print_r($a2);
     echo "<br/>";
     var_dump($a2);
     echo "<hr/>\n";
     showaRec($a3,0);
     echo "<br/>\n";
     // showMat also works for $a3 but it will not always for for nested arrays
     showMat($a3);
     echo "<hr/>\n";

     // modify1 will not actually modify the arrays
     modify1($a1);  modify1($a2);
     echo "<h3>After modify1 the arrays are:</h3>";
     showa($a1);  showa($a2);

     // modify2 will modify the parameters within the functions but leave the
     // argument arrays unchanged
     modify2($a1);  modify2($a2);
     echo "<h3>After modify2 the arrays are:</h3>";
     showa($a1);  showa($a2);

     // modify3 will modify the argument arrays
     modify3($a1);  modify3($a2);
     echo "<h3>After modify3 the arrays are:</h3>";
     showa($a1);  showa($a2);
     showaRec($a2,0);
     echo "<hr/>\n";

     // Demonstrating local vs. global variables
     globloc();
     echo "Back in main: <br/>\n";
     print_r($a1); echo "<br/>\n";
     print_r($a2); echo "<br/>\n";
 ?>
 </body>
</html>
