<?php
  # Start session and indicate that user is now on the site
  session_start();
  $_SESSION["started"] = 1;
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>CS 1520 PHP Example 17</title>
    </head>
    <body>
    <form action="ex17b.php" method="POST">
      <table border="1" align="center">
        <caption>
          <h2>CS 1520 Table of Quotes -- using MySQL</h2>
          <b><i>Select a quote segment and submit to see the full quote</i></b>
          <br />You must have a valid id and password to use this page<br />
        </caption>
        <tr align="center">
          <th>Quote Segment</th>
          <th>Speaker</th>
          <th>Select</th>
        </tr>
    <?php
      # This handout is similar in functionality to ex12.php and ex12b.php.  Look
      # at those for comparison. 

      # Get the initial data from the database file.  Note that for security
      # the db password will likely be stored in a directory not within the Web
      # tree (i.e. a file that is not accessible via a Web url).  However, I am
      # keeping it fairly simple here.

        $passlist = file("password.php");
        $passwd = rtrim($passlist[1]);
        $passwd = preg_replace('/#/','',$passwd);
        $db = new mysqli('localhost', 'bowytz', $passwd, 'bowytz');
        if ($db->connect_error):
           die ("Could not connect to db " . $db->connect_error);
        endif;
     
        # Get the data from the DB and present it to the user.  Only show the
        # fields indicated

        $query = "select Quotes.Quote_text, Quotes.Speaker from Quotes";
        $result = $db->query($query);
        $num_rows = $result->num_rows;
        for ($ctr = 1; $ctr <= $num_rows; $ctr++):
             $row = $result->fetch_array();
             $quote = stripslashes($row["Quote_text"]);
             $words = preg_split("/ +/", $quote);
    ?>
          <tr align = "center">
          <td>
    <?php 
             $wordcnt = 1;
             $theword = current($words);
             while ($theword && $wordcnt <= 8):
                  echo "$theword ";
                  $theword = next($words);
                  $wordcnt++;
             endwhile;
    ?>
          </td>
          <td> 
            <?php echo stripslashes($row["Speaker"]);?>
          </td>
          <td> 
            <input type="radio" name="slot" value="<?php echo $ctr ?>">
          </td> 
        </tr>
    <?php
        endfor;
    ?>
    <tr align = "center">
        <td>
          <b><i>Add a New Quote Below</i><br />(must have access to add quote)</b>
        </td>
        <td>
          
        </td>
        <td>
          <input type = "checkbox" name = "addquote" value = "1">
        </td>
        </tr>
      </table><br />
      <center>
        Quote: <input type="text" name="quote" size="80"> <br />
        Speaker: <input type="text" name="speaker" size="30"> <br />
        Author: <input type="text" name="author" size="30"> <br />
        Movie: <input type="text" name="movie" size="40"> <br />
        Comment: <input type="text" name="comment" size="60"> <br />
        <br />
          Your ID: <input type="text" name="id" size="20"> <br />
          Your Password: <input type="password" name="pass" size="20">
        <br />
        <input type="submit" value="Process">
      </center>
    </form>
  </body>
</html>
