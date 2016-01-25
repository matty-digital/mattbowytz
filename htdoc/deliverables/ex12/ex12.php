<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example 12</title>
</head>
<body>
<?php
  # Demonstration of PHP forms and files.
  # First we are creating an html form so that the user can submit
  # information back to the server.  The POST method sends the information
  # in a separate stream.  If we used GET it would append the information
  # to the web address
?>
<form action="ex12b.php" 
      method="POST">
<table border = "1">
<caption><h2>CS 1520 Table of Quotes</h2>
     <b><i>Select a quote segment and submit to see the full quote</i></b>
     <br/><br/>
</caption>
<tr align = "center">
  <th>Quote Segment</th>
  <th>Speaker</th>
  <th>Select</th>
</tr>
<?php
  # Read in the quote text file -- note that a single statement could read in
  # the entire file (as an array of strings).  However, in this case we read
  # the file line by line within a loop so we can flock the file as it is
  # being read.  Each quote is on a single line in the file.  For more on 
  # using files in php, see 
  # http://www.php.net/manual/en/ref.filesystem.php

  $fileptr = fopen("quotes.txt", "r");

  # flock the file so that we avoid inconsistent behavior
  # The LOCK_SH flag will allow multiple accesses for reading the file
  # However, to update the file we should get an exclusive lock
  if (flock($fileptr, LOCK_SH))
  { 
     $ctr=1;
     while ($currquote = fgetss($fileptr, 512))
     {
         // or
         // $currdata = fgets($fileptr,512);
         // $currquote = strip_tags($currdata);
  # Stripping tags is useful if you are formatting text within html.  If there
  # are html tags within the text they could cause problems with the formatting
  # that you are trying to do.  The fgetss function automatically strips tags
  # as it reads.  You can also strip tags as you read in data after you read
  # using the strip_tags() function.

  # Note that throughout this file I interleave PHP and html.  As long as you
  # follow the logic correctly, you can jump in and out of PHP mode. For each
  # quote we put in the prefix and the author, followed by a radio button to
  # allow it to be selected.  However, we don't want the entire quote here,
  # so we only print the first 8 words of each.
         $chunks = explode("|", $currquote);
         $words = preg_split("/ +/", $chunks[0]);
  # preg_split allows you to split a string using Perl-like regular expressions
  # There is a whole family of "preg" functions in PHP.  For more details, see
  # http://www.php.net/manual/en/ref.pcre.php.  We will be looking at regular
  # expressions in more detail shortly.  However, in the simple case above,
  # the function is breaking the string into words (splitting on one or more
  # blanks).
?>
         <tr align = "center">
         <td>
<?php 
         $wordcnt = 1;
         $theword = current($words);
         while ($theword && $wordcnt <= 8):
              echo "$theword ";
              $theword = next($words);
              $wordcnt++;
         endwhile;
?>
         </td>
         <td> <?php echo $chunks[1];?> </td>
         <td> <input type = "radio" name = "slot"
                           value= "<?php echo $ctr ?>" > </td> 
         </tr>
<?php
  # In the code above, the value set for each radio button is simply the value
  # of the counter (equal to the line number).  This way our code will work
  # regardless of the number of lines in the file.

         $ctr++;
     }
     flock($fileptr, LOCK_UN);
     fclose($fileptr);
  }
  # A checkbox is used to indicate if the user wants to add a new quote.
?>
  <tr align = "center">
  <td><b><i>Add a New Quote Below</i></b></td><td></td>
  <td> <input type = "checkbox" name = "addquote"
                     value = '<?php echo "1" ?>' > </td>
  </tr>
</table><br/>
  Quote: <input type = "text" name = "quote" size = "80"> <br/>
  Speaker: <input type = "text" name = "speaker" size = "30"> <br/>
  Author: <input type = "text" name = "author" size = "30"> <br/>
  Comment: <input type = "text" name = "comment" size = "50"> <br/>
<br/>
<input type = "submit" value = "Process">
</form>
</body>
</html>
