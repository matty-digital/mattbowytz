<!DOCTYPE html>
<html>
 <head>
  <title>Script to Initialize Quotes Database</title>
 </head>
 <body>
 <?php
      # This script is quite similar to setup.php.  It reads data from a flat
      # file and initializes some MySQL tables with it

      $passlist = file("password.php");
      $passwd = rtrim($passlist[1]);  // remove linefeed
      $passwd = preg_replace('/#/','',$passwd);
      $db = new mysqli('localhost', 'bowytz', "$passwd", 'bowytz');
      if ($db->connect_error):
         die ("Could not connect to db " . $db->connect_error);
      endif;

      $db->query("drop table Movies"); 
      $db->query("drop table Quotes");
      $db->query("drop table QuoteAccess");

      $result = $db->query(
                "create table Movies (Movie_name char(35) primary key not null, Writer char(30) not null)") or die ("Invalid: " . $db->error);

      # Note in the table below that the primary key field has the modifier
      # auto_increment associated with it.  This allows the new entities to
      # automatically be assigned integral primary keys without having to
      # explicitly keep track of them.

      $result = $db->query(
                "create table Quotes (Quote_id int primary key not null auto_increment, Quote_text text not null, Movie_name char(35) not null, Speaker char(30) not null, Comment text)") or die ("Invalid: " . $db->error);
      $quotes = file("quotes2.txt");
      foreach ($quotes as $quote_line)
      {
          # Before putting the quote into the database, we call the function
          # addslashes, which will add backslash characters in positions that
          # would cause grief to MySQL. Run it without the addslashes call to
          # see the resulting error.  We also check to see if the Movie is
          # already present.

          $quote_line = addslashes(rtrim($quote_line));
          $quote = explode("|", $quote_line);
          $name = $quote[3];
          $query = "select * from Movies where Movies.Movie_name = '$name'";
          $result = $db->query($query);

          # Insert new movie if it does not already exist in the database
          if ($result->num_rows == 0):
             $query = "insert into Movies values ('$name','$quote[2]')";
             $db->query($query) or die ("Invalid insert " . $db->error);
          endif;
          
          # Otherwise just insert the quote (it is from a movie that is
          # already in the database).  Note that the first parameter below
          # is NULL -- since that field is set to auto increment, we don't
          # actually pass a value to it

          $query = "insert into Quotes values (NULL, '$quote[0]', '$quote[3]','$quote[1]', '$quote[4]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      } 

      # In addition to the tables for Movies and Quotes, I have added another
      # here to show how you can store and manage ids and passwords in a
      # MySQL database.  Each ID will have a password and an access code.
      # An access code of 0 means the user can only read quotes but an access
      # code of 1 means the user can also add quotes

      $results = $db->query("create table QuoteAccess (User_name varchar(20) primary key not null, Password varchar(64) not null, access int not null)") or die ("Invalid: " . $db->error);
      $quoters = file("quoters.php");
      $quoters = array_slice($quoters, 1, -1);
      foreach ($quoters as $quoter)
      {
          $quoter = rtrim($quoter);
          $quoter = preg_replace('/#/','',$quoter);
          $chunks = explode(" ", $quoter);

          # Use a one-way has function on the passwords to make access a
          # bit more secure.  This way, if the DB is broken into, the passwords
          # will not be available in plaintext.  See notes for more info.
          $pass = hash('sha256',$chunks[1]);

          if ((strcmp($chunks[0],"bowytz") == 0)):
               $query = "insert into QuoteAccess values ('$chunks[0]', '$pass', 1)";
          else:
               $query = "insert into QuoteAccess values ('$chunks[0]', '$pass', 0)";
          endif;

          $db->query($query) or die ("Invalid insert " . $db->error);
      }
      echo "<b>The database has been initialized with the following tables:</b>";
      echo "<br /><br />";

      # Show data that has been inserted into the database
      $tables = array("Movies"=>array("Movie_name", "Writer"), 
                      "Quotes"=>array("Quote_id", "Quote_text", "Movie_name",
                                      "Speaker", "Comment"),
                      "QuoteAccess"=>array("User_name", "Password", "access"));
      foreach ($tables as $curr_table=>$curr_keys):
         $query = "select * from " . $curr_table;
         $result = $db->query($query);
         $rows = $result->num_rows;
         $keys = $curr_keys;
?>
      <table border = "1">
      <caption><?php echo $curr_table;?></caption>
      <tr align = "center">
<?php
         foreach ($keys as $next_key):
             echo "<th>$next_key</th>";
         endforeach;
         echo "</tr>"; 
         for ($i = 0; $i < $rows; $i++):
             echo "<tr align = 'center'>";
             $row = $result->fetch_array();
             foreach ($keys as $next_key)
             {
                  echo "<td> $row[$next_key] </td>";
             }
             echo "</tr>";
         endfor;
         echo "</table><br />";
      endforeach;
?>
 </body>
</html>
