<!DOCTYPE html> 
<html>
<head>
<title>CS 1520 PHP Example 12b</title>
</head>
</tr>
<?php
  # Note here that we are using the value of the $_POST variable "slot"
  # to determine which quote was selected.  If the user has chosen the checkbox
  # for "Add New Quote", the other POST variables are processed and the new 
  # quote is added to the file.  Whether a new quote is added or not, the
  # selected quote (from the radiobutton) is written in  bold italic and in
  # full, and some extra information is written after the table.

  # Note the use of stripslashes below.  When data is entered on a form, some
  # special characters (ex: ') are identified with backslashes so as not to
  # cause any problems (ex: with databases).  Since we are just using a text
  # file here we will strip them off
  
  # I also replace all | symbols with null strings so that the user cannot
  # mess up the formatting by entering | in the data.  Finally I strip the
  # tags as another precaution.  However, there may still be a way that the
  # malicious user can cause problems.  In general you should be EXTREMELY
  # CAREFUL any time you allow the user to enter arbitrary data in a form.
  # Giving users limited choices (ex: through lists, checkboxes and radio-
  # buttons) is generally much safer.

  $added = 0;
  if (isset($_POST["addquote"])):
      $quote = strip_tags(str_replace("|","",stripslashes($_POST["quote"])));
      $speak = strip_tags(str_replace("|","",stripslashes($_POST["speaker"])));
      $auth = strip_tags(str_replace("|","",stripslashes($_POST["author"])));
      $comm = strip_tags(str_replace("|","",stripslashes($_POST["comment"])));
      if ($quote && $speak && $auth && $comm):
         $added = 1;
         $fileptr = fopen("quotes.txt", "a");

         # Lock the file for writing before appending to it. Note that now
         # we are using an exclusive lock.  This will prevent another process
         # from reading (or writing) the file until we are finished.
         if (flock($fileptr, LOCK_EX)):
              $newline = implode("|", array($quote, $speak, $auth, $comm));
              fwrite($fileptr, "$newline\n");
         endif;

         # Don't forget to release the lock and close the file
         flock($fileptr, LOCK_UN);
         fclose($fileptr);
      else:
         $added = 2;
      endif;
  endif;
?>
  <body>
  <table border = "1">
  <caption><h2>CS 1520 Table of Quotes</h2>
<?php
       if (isset($_POST["slot"])):
       	  $slot = $_POST["slot"];
          echo "<b><i>Your selection is highlighted and explained below</i></b> <br />";
       else:
          $slot = 0;
          echo "<b><i>No quote was chosen</b></i><br />";
       endif;
       if ($added == 1):
          echo "<b><i>Your new entry is included in the table</b></i><br />";
       elseif ($added == 2):
          echo "<b><i>Your new entry was NOT added due to empty fields</b></i><br />";
       endif;
?>
  <br />
  </caption>
  <tr align = "center">
    <th>Quote Segment</th>
    <th>Speaker</th>
<?php
  # Just to show an alternate way of reading, I am using the file() function
  # below.  If a file can be changed (as this one can be) using file() is
  # not a good idea because it does not flock().  If another process is in
  # the middle of a write when file() is called, we could get some bad data
  # here.  However, I am using it here just to demonstrate how it works.  
  # Generally it is ok to use for read-only information (i.e. files that will
  # not be updated by the scripts).
  
  # Since I have already written and closed the file above, I can now read in
  # the new entry as part of the regular data.

  $filedata = file("quotes.txt");
  $ctr=1;
  foreach ($filedata as $currdata):
      $currquote = strip_tags($currdata);
      $chunks = explode("|", $currquote);
      $words = preg_split("/ +/",$chunks[0]);
?>
      <tr align = "center">
      <td>
<?php 
      $wordcnt = 1;
      $theword = current($words);
      $max = 8;

      # Set font to bold italic if the current quote is the chosen one

      if ($slot == $ctr):
         $chosen = $chunks;
         echo "<b><i>";
         $max = count($words);
      endif;
      while ($theword && $wordcnt <= $max):
           echo "$theword ";
           $theword = next($words);
           $wordcnt++;
      endwhile;
      if ($slot == $ctr)
         echo "</b></i>";
?>
      </td>
      <td> <?php echo $chunks[1];?> </td>
      </tr>
<?php
      $ctr++;
  endforeach;
?>
</table>
<?php
?>
<h3>
<?php
  if ($slot):
      echo "Writer: $chosen[2] <br /> Comment: $chosen[3]";
  endif;
?>  
<br/><br/>
<a href="ex12.php">Try Another Quote</a>
</h3>
</body>
</html>
