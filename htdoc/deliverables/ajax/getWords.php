<?php
  // Simple script to retrieve a random word from the database in XML
  // format and return it to the requestor. 
  $db = new mysqli('localhost', 'name', "$passwd", 'name');
  if ($db->connect_error):
    die ("Could not connect to db " . $db->connect_error);
  endif;

  $query = "select word from Words2 order by rand() limit 1";
  $result = $db->query($query);
  $rows = $result->num_rows;
  if ($rows >= 1):
    header('Content-type: text/xml');
    echo "<?xml version='1.0' encoding='utf-8'?>";
    echo "<Word>";
    $row = $result->fetch_assoc();
    $ans = $row["word"];
    echo "<value>$ans</value>";
    echo "</Word>";
  else:
    die ("DB Error");
  endif;
?>