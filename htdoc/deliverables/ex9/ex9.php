<!DOCTYPE html>
<html>
 <head>
  <title>CS 1520 -- Ninth PHP Example</title>
 </head>
 <body>
 <?php
  /* This handout demonstrates more of PHP arrays (including two-dimensional
     arrays)
  */
  include("display.php");
               
  # Output two-d array in traditional "row column" format.  Note
  # that this assumes that the array is indexed in the "traditional"
  # 0 to (size-1) way for rows and columns.
  function showMat($a) {
    for ($i = 0; $i < count($a); $i++):
      for ($j = 0; $j < count($a[$i]); $j++):
        echo $a[$i][$j], " ";
      endfor;
      echo "<br/>\n";
    endfor;
  }
      
  $a1 = array(10, 20, 30, 40, 50);
  $a2 = array("here", "is", array("an", "array", array("with", "several"), array("levels", "of")), array("nesting", "it", "is"), "quite", "wacky");
  $a3[0] = array(1,2,3,4);
  $a3[1] = array(5,6,7,8);
  $a3[2] = array(9,10,11,12);
  showa($a1);  showa($a2);  showa($a3); 

  echo "<hr/>\n";
  showMat($a2);  // Note the odd output for this call. Be sure you
                 // understand why it appears as it does
  showMat($a3);  // This output looks more natural, since the data is stored
                 // in the traditional "matrix" fashion

  // Note that neither method (showa, showMat) produces acceptable output for
  // $a2.  We will soon see how to process the array so that all of the data
  // is accessed.  One predefined way to show an array with arbitrary nesting
  // is the print_r method as shown below.
  echo "<hr/>\n";
  print_r($a1);
  echo "<br/><br/>\n";
  print_r($a2);
  echo "<br/><br/>\n";
  print_r($a3);
 ?>
 </body>
</html>
