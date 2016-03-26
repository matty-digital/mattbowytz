<?php
  #  CS 1520 AJAX Example -- server script
  #  Compare to tabulate2.php
  #  This script adds the "update" functionality to tabulate2.php.  To
  #  do this it accepts 3 types of requests:
  #  1) Update count for a preexisting CD
  #  2) Add a new entry (possibly also returning recently added entries)
  #  3) Return recently added entries without adding anything new
  #  Previous comments have been removed.  See some additional new
  #  comments below.

  # You should know how to connect to a db with mysqli by now, so put your creds in here
  $db = new mysqli('localhost', "$user", "$passwd", "$user");
  
  if ($db->connect_error):
    die ("Could not connect to db " . $db->connect_error);
  endif;

  $type = $_POST["type"];
  
  if ($type == 1):
    $choice   = $_POST["select"];
    $query    = "select Votes from CDs where id = '$choice'";
    $result   = $db->query($query);
    $row      = $result->fetch_array();
    $count    = $row["Votes"];
    $newcount = $count + 1;
    $query    = "update CDs set Votes = '$newcount' where id = '$choice'";
    $result   = $db->query($query) || die("BOGUS A $type");
    echo "$newcount";
  elseif ($type == 2):
    $numrows = strip_tags($_POST["rows"]);
    $artist  = strip_tags($_POST["artist"]);
    $title   = strip_tags($_POST["title"]);
    $newrows = "";
    $query   = "lock tables CDs write";
    $result  = $db->query($query) || die($db->error);
    $query   = "select * from CDs";
    $rr      = $db->query("select * from CDs");
    $resrows = $rr->num_rows;
    
    if ($numrows < $resrows):
      for ($i = $numrows; $i < $resrows; $i++):
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
      
    if ($newrows == "") $newrows = "OK";
      $query  = "insert into CDs values (NULL, '$title', '$artist', '1')";
      $result = $db->query($query) || die($db->error);
      $query  = "unlock tables";
      $result = $db->query($query) || die($db->error);
      echo "$newrows";
    else: // type = 3
      // This code is very similar to that for type 2 above, except that
      // we do not add anything to the DB here.  We are simply retrieving
      // any rows in the DB that were not already on the client page
      $numrows = strip_tags($_POST["rows"]);
      $newrows = "";
      $rr      = $db->query("select * from CDs");
      $resrows = $rr->num_rows;

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
    echo "$newrows";
  endif;
?>
