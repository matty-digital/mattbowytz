<?php
  # Retrieve session variable -- this will be used to make sure that the user
  # does not start on the "wrong page"
  session_start();
  if (isset($_SESSION["started"]))
      $started = $_SESSION["started"];
  else
      $started = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Example 17b</title>
</head>
<body>
<?php
   # If $started is NOT set, it means the user did not go through the
   # login page first -- so tell him/her about it and quit

   if (!$started):
       echo "<center><h2> Your session is invalid";
       echo "<br /> Please access the main site page first:";
       echo "<a href = \"ex17.php\">Quote Site</a>";
       session_destroy();
       die("</h2></center>");
   endif;

   #  Log into the DB
   $passlist = file("password.php");
   $passwd = rtrim($passlist[1]);
   $passwd = preg_replace('/#/','',$passwd);
   $db = new mysqli('localhost', 'bowytz', "$passwd", 'bowytz');
   if ($db->connect_error):
      die ("Could not connect to db " . $db->connect_error);
   endif;

   # Get the user and password info from the $_POST array.  hash() the
   # password before matching it with the DB info.  If the password does not
   # match, notify the user and quit.
   $user = rtrim($_POST["id"]);
   $pass = hash('sha256', rtrim($_POST["pass"]));
   $query = "select * from QuoteAccess where QuoteAccess.User_name = '$user' and QuoteAccess.Password = '$pass'";
   $result =  $db->query($query) or die ("Invalid query" . $db->error);
   $rows = $result->num_rows;
   if ($rows < 1):
       echo "<br/><H2><center>You are not an authorized user!<BR />";
       echo "<a href = \"ex17.php\">Try Again</a>";
       session_destroy();
       die("</h2></center>");
   endif;

   # User is valid, so proceed.  Store state in $_SESSION.
   $_SESSION["logged"] = 1;

   # Test to see if user wants to add a quote to the DB.  If so, test to make
   # sure user has access to do so.  If so, add the quote; otherwise tell the
   # user the problem.
   if (isset($_POST["addquote"]))
       $addquote = $_POST["addquote"];
   else
       $addquote = 0;
   $added = 2;
   if ($addquote == 1):
       $row = $result->fetch_array();
       $access = $row["access"];
       if ($access == 1):
           $quote = addslashes(strip_tags(str_replace("|","",stripslashes($_POST["quote"]))));
           $speak = addslashes(strip_tags(str_replace("|","",stripslashes($_POST["speaker"]))));
           $auth = addslashes(strip_tags(str_replace("|","",stripslashes($_POST["author"]))));
           $movie = addslashes(strip_tags(str_replace("|","",stripslashes($_POST["movie"]))));
           $comm = addslashes(strip_tags(str_replace("|","",stripslashes($_POST["comment"]))));
           if ($quote && $speak && $auth && $comm):
               $added = 1;
           # Here we want to see if the Movie associated with a quote is in
           # the DB.  If not, we want to add it to the DB.  However, before
           # checking and adding, we want to lock the table to make sure that
           # the DB is consistent throughout this process.  See the MySQL
           # documentation for more important info on LOCK
             
               $query = "lock tables Movies write";
               $db->query($query) or die ("Could not lock" . $db->error);

               $query = "select * from Movies where Movies.Movie_name = '$movie'";
               $result = $db->query($query);

               # Insert new movie if it does not already exist in the database
               if ($result->num_rows == 0):
                   $query = "insert into Movies values ('$movie','$auth')";
                   $db->query($query) or die ("Invalid insert " . $db->error);
               endif;
               $query = "unlock tables";
               $db->query($query) or die ("Could not unlock" . $db->error);
               
               # Since detecting duplicate quotes will be fairly tough (do we
               # require a char by char exact match of the quotes, or just an
               # approximate match?  If a quote is a subquote of an already
               # existing quote, what do we do?) we will just insert the quote
               # itself without checking anything.

               $query = "insert into Quotes values (NULL, '$quote', '$movie','$speak', '$comm')";
               $db->query($query) or die ("Invalid insert " . $db->error);
?>
               <table border = "1" align = center>
               <caption><h2>Added Quote</h2>
               <b><i>The quote below was added to the DB</i></b>
               <br /><br />
               </caption>
               <tr align = "center">
                   <th>Quote Segment</th>
                   <th>Speaker</th>
                   <th>Movie</th>
                   <th>Writer</th>
               </tr>
               <tr align = "center">
                   <td><?php echo "$quote";?></th>
                   <td><?php echo "$speak";?></th>
                   <td><?php echo "$movie";?></th>
                   <td><?php echo "$auth";?></th>
               </tr>
               </table><br />
<?php
           else:
               echo "<h2><center>";
               echo "Quote was formatted incorrectly -- not added";
               echo "</h2></center>";
           endif;
       else:
           echo "<h2><center>";
           echo "You don't have access privileges -- quote not added <br />";
           echo "</h2></center>";
       endif;
   endif;
   if (isset($_POST["slot"])):
       $slot = $_POST["slot"];
?> 
<table border = "1" align = "center">
<caption><h2>CS 1520 Table of Quotes -- using MySQL</h2>
     <b><i>Your selection is shown and explained below</i></b>
     <br /><br />
</caption>
<tr align = center>
  <th>Quote Segment</th>
  <th>Speaker</th>
  <th>Movie</th>
  <th>Writer</th>
</tr>
<?php
        $query = "select Quotes.Quote_text, Quotes.Speaker, Quotes.Movie_name, Quotes.Comment, Movies.Writer from Quotes, Movies where Quotes.Quote_id = '$slot' and Quotes.Movie_name = Movies.Movie_name";
        $result = $db->query($query) or die ("Quote not found ");
        $row = $result->fetch_array();
        $quote = stripslashes($row["Quote_text"]);
?>
        <tr align = "center">
        <td>
<?php 
        echo "$quote";
?>
        </td>
        <td> <?php echo stripslashes($row["Speaker"]);?> </td>
        <td> <?php echo stripslashes($row["Movie_name"]);?> </td>
        <td> <?php echo stripslashes($row["Writer"]);?> </td>
        </tr>
</table>
<br />
        <h3><center><?php echo stripslashes($row["Comment"]);?></center></h3>
<form action="ex17c.php"
      method="POST">
<center>See All Quotes From
<br />
<input type = "submit" name = "submit" value = "<?php echo stripslashes($row["Movie_name"]);?>">
<br /><br />
<?php
   else:
?>
    <center>
    <h2>You did not select a quote</h2>
    <form action="ex17c.php" method="POST">
      <?php
         endif;
         # For comments on the submit below, see ex17c.php
      ?>
      <input type = "submit" name = "submit" value = "Try Another Quote">    
    </form>
  </center>
</body>
</html>
