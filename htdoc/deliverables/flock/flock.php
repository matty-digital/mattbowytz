<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example To Demonstrate Flocking</title>
</head>
<body>
<?php
  // Get an id from the $_SERVER variable.
  $my_port = $_SERVER["REMOTE_PORT"];
  $fp = fopen("flockdemo.txt", "a");   // Open file for append 

  // Append id to the file 50 times, stalling a bit between each
  // iteration.  Try commenting out the flock to see the difference
  // in the output without the flock statement. To test this, submit
  // two requests to the server for the same script "at the same time".
  // For example, you could submit one from your PC and one from your
  // phone.
  if (flock($fp, LOCK_EX)):            // Get exclusive lock
      for ($i = 1; $i <= 50; $i++):
           fwrite($fp, "Writing $my_port for $i th time");
           echo "Writing $my_port for $i th time ";
           for ($j = 0; $j < 50000; $j++);
           fwrite($fp,"...done writing $my_port\n");
           echo "...done writing $my_port<br/>\n";
      endfor;
  endif;
  flock($fp, LOCK_UN);   // Release the lock
?>
</body>
</html>
