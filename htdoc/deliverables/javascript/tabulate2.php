<?php
  #  CS 1520 AJAX Example -- server script
  #  Compare to tabulate.php
  #  In this version, before returning we check to see if any new rows
  #  have been added to the database.  If so, we return the new data.
  #  Since we are using the text return (rather than XML), we must return
  #  a single string from this program.  Therefore, to return multiple rows
  #  in a table we must concatenate the data so it can then be parsed
  #  by the client program.  See more details below.

  #  Log into the DB
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
    $result   = $db->query($query) || die("WACK A $type");

    # Send new count back to client.  Note that the client could have
    # updated this value directly, but this shows how data from the
    # server can be sent back to the client for updating.
    echo "$newcount";
  else:
    # Check to see if any updates have been made to the database before
    # adding the new row.  If so, return the new data as a string.
    $numrows = strip_tags($_POST["rows"]);
    $artist  = strip_tags($_POST["artist"]);
    $title   = strip_tags($_POST["title"]);
    $newrows = "";
    # Lock table so no new rows can be added while we are checking
    # the contents
    $query   = "lock tables CDs write";
    $result  = $db->query($query) || die($db->error);
    $query   = "select * from CDs";
    $rr      = $db->query("select * from CDs");
    $resrows = $rr->num_rows;

    # If number of rows in DB is more than those in the client's table,
    # 1 or more new rows must have been added.  Retrieve those rows and
    # add them to the return string.  Note that we are assuming that there
    # are no "^" or "|" characters in the titles or artists of the CDs.  
    if ($numrows < $resrows):
      for ($i = $numrows; $i < $resrows; $i++):
        # Find the appropriate row and retrieve it.  Then append the
        # fields to the return string.
        $rr->data_seek($i);
        $curr = $rr->fetch_array();
        $newrows .= $curr["id"] . "|";
        $newrows .= $curr["Title"] . "|";
        $newrows .= $curr["Artist"] . "|";
        $newrows .= $curr["Votes"];
          
        if ($i < $resrows-1):
          $newrows .= "^";
        endif;
      endfor;
    endif;
    # If $newrows is empty, just return ok -- the data for the row
    # the client added are still resident in the client.
    if ($newrows == "") $newrows = "OK";
      $query  = "insert into CDs values (NULL, '$title', '$artist', '1')";
      $result = $db->query($query) || die($db->error);
      $query  = "unlock tables";
      $result = $db->query($query) || die($db->error);
      echo "$newrows";
    endif;
  endif;
?>
