<?php
   session_start();
   $movie = $_POST["submit"];

   # If user selected "Try Another Quote" we redirect to that page
   # without any further processing.  Notes:
   # 1) I could have put a hyperlink in ex17b.php directly to ex17.php
   #    rather than using the redirection shown here.  However, I added this
   #    to demonstrate redirection.  
   # 2) If used, redirection must be done PRIOR to any html (same idea as
   #    setting cookies)
   # 3) This redirection is done prior to testing any session variables
   #    so technically a user could access this redirect without going
   #    through ex17b.php.  However, illegal accesses should redirect to
   #    the main page, and this is what is done here anyway, so it is not
   #    a problem.
   if (strcmp($movie, "Try Another Quote") == 0):
       session_destroy();
       header("Location: ex17.php");
       exit;
   endif;
?>
<html>
<head>
<title>CS 1520 PHP Example 17c</title>
</head>
<body>
<?php
   $logged = $_SESSION["logged"];
   # Again make sure that the user has not just connected directly to this
   # page (using a $_SESSION variable)
   if (!$logged):
       echo "<center><h2> Your session is invalid";
       echo "<br /> Please access the main site page first:";
       echo "<a href = \"ex17.php\">Quote
 Site</a>";
       session_destroy();
       die("</h2></center>");
   endif;
?>
<table border = "1" align = center>
<caption><h2>CS 1520 Table of Quotes -- using MySQL</h2>
     <b><i>All Quotes are Shown Below</i></b>
     <br /><br />
</caption>
<tr align = center>
  <th>Quote Segment</th>
  <th>Speaker</th>
  <th>Movie</th>
  <th>Writer</th>
</tr>
<?php
  # Log onto the database 
    $passlist = file("password.php");
    $passwd = rtrim($passlist[1]);
    $passwd = preg_replace('/#/','',$passwd);
    $db = new mysqli('localhost', 'bowytz', "$passwd", 'bowytz');
    if ($db->connect_error):
       die ("Could not connect to db " . $db->connect_error);
    endif;

    # Now we need to get the set of quotes where the movie name matches
    # the value passed in by the form.  This is another simple MySQL
    # query.
    $query = "select Quotes.Quote_text, Quotes.Speaker, Quotes.Movie_name, Movies.Writer from Quotes, Movies where Quotes.Movie_name = '$movie' and Quotes.Movie_name = Movies.Movie_name";
    $result = $db->query($query) or die ("Quote not found ");
    $num_rows = $result->num_rows;
    for ($i = 0; $i < $num_rows; $i++):
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
<?php
    endfor;
    session_destroy(); // Force user to log in again for repeat access
?>
</table>
<br /><br />
<center>
<h2>
<a href = "ex17.php">Return to Main Quote Page</a>
</h2>
</center>
</body>
</html>
