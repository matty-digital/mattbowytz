<?php

  $db = new mysqli('localhost', 'name', $passwd, 'name');

  if ($db->connect_error): 
    die ("Could not connect to db " . $db->connect_error); 
  endif;

  $db->query("drop table Words2"); 
  $result = $db->query("create table Words2 (id int primary key not null auto_increment, word varchar(30) not null)") or die ("Invalid: " . $db->error);

  $fp = fopen("testwords.txt", "r");
  while ($currword = fgets($fp, 80)):
    $currword = rtrim($currword);
    $query = "insert into Words2 values (NULL, '$currword')"; 
    echo "$query<br/>";
    $db->query($query) or die ("Invalid insert " . $db->error); 
  endwhile;
?>
<!doctype html>
<html>
  <head>
    <title>Generating a Words Table</title>
  </head>
  <body>
  <?php
    echo "Words should be set up properly";
  ?>
  </body>
</html> 