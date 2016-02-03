<!-- access_cars.php
     A PHP script to access the cars database
     through MySQL

     I have modified this handout, originally by the textbook author, in
     several ways:
     1) I added a password form field to access the DB.  This prevents an
        arbitrary user from using this script in an arbitrary way.
     2) I modified the DB access to use mysqli and oop

-->
<html>
  <head>
    <title> Access the cars database with MySQL </title>
  </head>
  <body>
    <?php
      // Connect to MySQL and create mysqli object

      $userid = rtrim(strip_tags($_POST["id"]));
      $userpass = rtrim(strip_tags($_POST["pass"]));
      $db = new mysqli('localhost', "$userid", "$userpass", "$userid");
      if ($db->connect_error) {
           print "Error - Could not connect to MySQL";
           exit;
      }

      // Clean up the given query (delete leading and trailing whitespace)
      $query = $_POST["query"];
      trim($query);
      $query = stripslashes($query);
      print "<p> <b> The query is: </b> " . $query . "</p>";

      // Execute the query

      $result = $db->query($query);
      if (!$result) {
          print "Error - the query could not be executed";
          $error = $db->error;
          print "<p>" . $error . "</p>";
          exit;
      }
      else if (gettype($result) == "boolean")
      {
          echo "Database Update Was Successful <br />";
          exit;
      }

      // Display the results in a table

      print "<table><caption> <h2> Query Results </h2> </caption>";
      print "<tr align = 'center'>";

      // Get the number of rows in the result, as well as the first row
      //  and the number of fields in the rows

      $num_rows = $result->num_rows;  // how many rows in result?
      if ($num_rows == 0):
          print "Your query had no matches -- try again";
          exit;
      endif;
      $row = $result->fetch_array();  // get first row
      $num_fields = sizeof($row);

      // Produce the column labels
      //print_r($row);  // Uncomment this to see raw content of a row
      // Note that we are doing two each calls per column in the html table.  This
      // is because PHP stores the results of the query twice -- once indexed by
      // integer starting at 0 and once indexed by the column name.  These are
      // sequential by column.  So, for example, if we have a table with columns
      // "wacky" and "silly", the indexes of our resulting PHP array would be 0,
      // wacky, 1 and silly, in that order.
      while ($next_element = each($row)){ 
          $next_element = each($row);
          $next_key = $next_element['key'];
          print "<th>" . $next_key . "</th>";
      }

      print "</tr>";

      // Output the values of the fields in the row

      for ($row_num = 0; $row_num < $num_rows; $row_num++) {
          reset($row); 
          print "<tr align = 'center'>";
          // Since the fields are all stored twice, only go through 1/2 of the
          // total items, indexing by integer
          for ($field_num = 0; $field_num < $num_fields/2; $field_num++)
              print "<td>" . $row[$field_num] . "</td> ";

          print "</tr>";
          $row = $result->fetch_array();
      }
      print "</table>";
    ?>
  </body>
</html>

