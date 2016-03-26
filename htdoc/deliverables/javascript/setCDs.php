<?php

  # You should know how to connect to a db with mysqli by now, so put your creds in here
  $db = new mysqli('localhost', "$user", "$passwd", "$user");
  
  if ($db->connect_error):
    die ("Could not connect to db: " . $db->connect_error);
  endif;

  $result = $db->query("drop table CDs");
  $result = $db->query("create table CDs (id int primary key not null auto_increment, Title char(30) not null, Artist char(30), Votes int)") or die ("Invalid: " . $db->error);

  $query = "insert into CDs values (NULL, 'Fear of Music', 'Talking Heads', 2)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
  $query = "insert into CDs values (NULL, 'The Downward Spiral', 'NIN', 5)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
  $query = "insert into CDs values (NULL, 'The Joshua Tree', 'U2', 8)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
  $query = "insert into CDs values (NULL, 'Fables of the Reconstruction', 'REM', 3)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
  $query = "insert into CDs values (NULL, 'Porcupine', 'Echo and the Bunnymen', 4)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
  $query = "insert into CDs values (NULL, 'Hounds of Love', 'Kate Bush', 2)"; 
  $db->query($query) or die ("Invalid insert " . $db->error); 
?>
<html>
  <head>
    <title>Generating a Simple Table</title>
  </head>
  
  <body>
    <?php
      echo "CDs should be set up properly";
    ?>
  </body>
</html> 
