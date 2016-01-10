<!DOCTYPE html>
<html>
 <head>
  <title>Sixth PHP Example</title>
 </head>
 <body>
 <?php
     // CS 1520
     // Demonstration of expressions and control structures in PHP
     $x = 15;
     $y = 6;
     $z = 5;
     echo ($x/$y), " ", (int)($x/$y), ($x/$z), "<br/><br/>\n";
     $x = 150;  $x2 = "150";
     $y = 160;  $y2 = "160";
     $z = 80;   $z2 = "80";
     $a = "aardvark";
     
     if ($x == $x2) print "[int] $x == [string] $x2 <br/>\n";   // yes
     if ($x === $x2) print "[int] $x === [string] $x2 <br/>\n"; // no
     if ($x !== $x2) print "[int] $x !== [string] $x2 <br/>\n"; // yes
     if ($x < $y) print "[int] $x < [int] $y <br/>\n";       // yes
     if ($x < $y2) print "[int] $x < [string] $y2 <br/>\n";  // yes (casting)
     if ($x < $z) print "[int] $x < [int] $z <br/>\n";       // no (numeric)
     if (strcmp($x, $z) < 0) print "$x lt $z <br/>\n";       // yes (alpha)

     if ((string)$x < (string)$z) print "$x lt $z <br/>\n";  // no (why???)
     else print "$x ge $z <br/>\n"; 

     if ($x < $a) print "$x < $a <br/>\n";  		     // no (why???)
     else print "$x >= $a <br/>\n";  		    

     if ((string)$x < $a) print "$x lt $a <br/>\n";          // yes (why???)

     echo "<br/>";
     $x1 = "wacky";  // normal string
     $x2 = "10";     // string representing a number
     $x3 = "0";      // string representing 0
     $x4 = "00";     // string double 0
     $y = 0;         // 0 integer
     $z = (2 != 2);  // false boolean

     if ($x1 == $y)  // non-numeric string == 0
     {
        print "[string] $x1 == [int] $y -- WACKY! <br/>\n";
     }
     if ($x2 != $y)  // numeric string == number value
     {
        print "[string] $x2 != [int] $y -- WACKY! <br/>\n";
     }
     if ($x3 == $y)  // numeric string == number value
     {
        print "[string] $x3 == [int] $y -- WACKY! <br/>\n";
     }
     if ($x1 != $z)  // non-numeric string == true
     {
        print "[string] $x1 != [boolean] $z -- WACKY! <br/>\n";
     }
     if ($x2 != $z)  // non-zero string == true
     {
        print "[string] $x2 != [boolean] $z -- WACKY! <br/>\n";
     }
     if ($x3 == $z)  // zero string == false
     {
        print "[string] $x3 == [boolean] $z -- WACKY! <br/>\n";
     }
     if ($x4 != $z)  // 00 string == true
     {
        print "[string] $x4 != [boolean] $z -- WACKY! <br/>\n";
     }
 ?>
 <h2><strong>
 <?php
     for ($i = 1; $i <= 10; $i++)
     {
        echo $i;
        if ($i < 10) echo ", ";
     }
     echo "<br/>\n";  
     // Same loop as above but now using the alternative
     // block syntax.  Once you get used to this, you may
     // prefer it to the old C-style blocks
     for ($i = 1; $i <= 10; $i++):
        echo $i;
        if ($i < 10) echo ", ";
     endfor;
     echo "<br/>\n";  
 ?>
 </strong></h2>
 <table border = "1">
 <?php
     // Note that in the loops below we go back and forth from
     // interpret mode to "copy" mode and the logic still holds.
     // This allows us to easily mix PHP and HTML code in documents.
     for ($i = 1; $i < 5; $i++):
 ?>
         <tr align = "center">
 <?php
         for ($j = 1; $j < 5; $j++):
 ?>
             <td> <?php echo "$i,$j";?> </td>
 <?php
         endfor;
 ?>
         </tr>
 <?php
      endfor;
 ?>
 </table>
 </body>
</html>
