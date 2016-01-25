<!DOCTYPE html>
<html>
 <head>
  <title>CS 1520 -- Eleventh PHP Example</title>
 </head>
 <body>
 <?php
  /* More on PHP functions, including default parameters and variable
     function calls
  */
     # Default values for parameters are used if no value is supplied
     # in the function call

     function showthevalues($a, $num = 6)
     {
         if (is_array($a)):
            $ctr = 1;
            foreach ($a as $value):
               echo "$value ";
               $ctr++;
               if ($ctr > $num):
                  echo "<BR />\n";
                  $ctr = 1;
               endif;
            endforeach;
         endif;
         echo "<BR /><BR />\n";
     }

     function showkeyvalues($a, $num = 8)
     {
         if (is_array($a)):
            $ctr = 1;
            foreach ($a as $key=>$value):
               echo "$key:$value ";
               $ctr++;
               if ($ctr > $num):
                  echo "<BR />\n";
                  $ctr = 1;
               endif;
            endforeach;
         endif;
         echo "<BR /><BR />\n";
     }

     # Compare in the "reverse" of the traditional way
     function compare($a, $b)
     {
         if ($a == $b) return 0;
         if ($a > $b) return -1;
         return 1;
     }
                   
     # Note that the strings are the names of the functions above
     $a1 = array("showthevalues", "showkeyvalues");
     $a2 = array(7,14,21,5,12,19,3,10,17,1,8,15,22,6,13,20,4,11,18,2,9,16);
     foreach ($a1 as $value):
          $wacky = $value($a2);
     endforeach;
     foreach ($a1 as $value):
           $value($a2, 5);
     endforeach;

     # usort allows a comparison function as a parameter.  Later we will see
     # how we can utilize this to sort objects
     usort($a2, "compare");
     print_r($a2);
 ?>
 </b></h2>
 </body>
</html>
