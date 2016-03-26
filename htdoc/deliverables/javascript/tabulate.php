<?php
  #  CS 1520 AJAX Example
  #  AJAX Demo -- processing the submission and sending the results
  #  back to the client.
  #  Look at this handout in conjunction with CDpoll.php

  # You should know how to connect to a db with mysqli by now, so put your creds in here
  $db = new mysqli('localhost', "$user", "$passwd", "$user");
  
  if ($db->connect_error):
    die ("Could not connect to db " . $db->connect_error);
  endif;

  $type = $_POST["type"];
  
  if ($type == 1):
    # Get choice and update the DB
    $choice   = $_POST["select"];
    $query    = "select Votes from CDs where id = '$choice'";
    $result   = $db->query($query);
    $row      = $result->fetch_array();
    $count    = $row["Votes"];
    $newcount = $count + 1;
    $query    = "update CDs set Votes = '$newcount' where id = '$choice'";
    $result   = $db->query($query) || die("BOGUS A $type");

    # Send new count back to client.  Note that the client could have
    # updated this value directly, but this shows how data from the
    # server can be sent back to the client for updating.
    echo "$newcount";
  else:
    # Add new choice to the DB.  Note that we are not checking to see
    # if it is already present -- we probably should do that
    $artist = strip_tags($_POST["artist"]);
    $title = strip_tags($_POST["title"]);
    $query = "insert into CDs values (NULL, '$title', '$artist', '1')";
    $result = $db->query($query) || die(mysql_error());
    // Just send back an ACK to tell client the add was successful
    echo "OK";
  endif;
?>
