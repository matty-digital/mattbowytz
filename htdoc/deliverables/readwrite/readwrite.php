<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example To Show Reading / Writing Files</title>
</head>
<body>
<?php
  # Demonstration of reading and writing PHP files.
  # We can read in an entire text file in one statement if we'd like
  $data = file("filedemo.txt");
  /* If "filedemo.txt" does not exist, the $data variable will be empty.  Depend
ing
     on the server settings, a warning may also be returned.  See course notes.
*/
  foreach ($data as $key => $val):
      print "$val <br />";
      $data[$key] = $data[$key]+1;  // Add one to each value
  endforeach;
  $data[] = $data[count($data)-1]+1;  // Add a new value at the end
  $fp = fopen("filedemo.txt", "w");   // Open file for writing
  foreach ($data as $val):
      fwrite($fp, $val."\n");	      // Write data to file
  endforeach;
  fclose($fp);			      // Close file
?>
</body>
</html>
