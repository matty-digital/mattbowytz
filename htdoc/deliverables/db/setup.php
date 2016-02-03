<!DOCTYPE html>
<html>
 <head>
  <title>MySQL Setup Example</title>
 </head>
 <body>
 <?php
      # This program will set up the tables as shown in the Chapter 13 of 
      # the Sebesta text.  Note that this will not CREATE a database.  On
      # a web server normal users do not have permission to do this.  Thus, the
      # administrator (in this case, also me) created the actual database, and 
      # I am simply adding tables and data to it with this script.

      # Get password from a file and use it to connect do server. Be careful
      # regarding passwords.  You can hardcode them into your scripts if you
      # know you will be the only one seeing the scripts.  If you store them
      # in a plaintext file (as I have done) make sure no one else has access
      # to that file.  Putting the file onto a common Web directory is NOT a
      # good idea.  It is a better idea to put them into a file that is stored
      # outside the Web tree.  I put mine within a .php file so that at least 
      # it would be difficult (but not impossible) for someone to read it.  
      # Naturally, substitute your id and password below when using this example.
      # If you create a production Web site, look up on the Web more info about 
      # storing MySQL passwords.
      $passlist = file("password.php");
      $passwd = rtrim($passlist[1]);
      $passwd = preg_replace('/#/','',$passwd);
      $db = new mysqli('localhost', 'bowytz', $passwd, 'bowytz');
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;

      # Since this code is merely setting up the DB, we will first make
      # sure the tables we want are not already there.  The drop command
      # will remove an existing table

      $db->query("drop table Corvettes"); 
      $db->query("drop table States");
      $db->query("drop table Equipment");
      $db->query("drop table Corvettes_Equipment");

      # Now we will create the tables we need.  For each one, I create the
      # table, then read in the data from a flat file.  For each field, note
      # the modifiers specified -- these indicate properties of the data to
      # to be stored in that column.  
      $result = $db->query(
                "create table Corvettes (Vette_id int primary key not null, Body_Style char(30) not null, Miles float(5,1) not null, Year char(4) not null, State int not null)") or die ("Invalid: " . $db->error);
      $cars = file("Corvettes.flat");
      //print_r($cars);

      # Read each entity from the flat file, split it into parts and insert
      # into the appropriate fields in the table.
      foreach ($cars as $carstring)
      {
          $carstring = rtrim($carstring);
          $car = preg_split("/ +/", $carstring);
          $query = "insert into Corvettes values ('$car[0]','$car[1]','$car[2]','$car[3]','$car[4]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      } 
      $result = $db->query(
                "create table States (State_id int primary key not null, State char(30) not null)") or die ("Invalid: " . $db->error);
      $states = file("States.flat");
      foreach ($states as $statestring)
      {
          $statestring = rtrim($statestring);
          $state = preg_split("/ +/", $statestring);
          $query = "insert into States values ('$state[0]','$state[1]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      } 
      $result = $db->query(
                "create table Equipment (Equip_id int primary key not null, Equip char(30) not null)") or die ("Invalid: " . $db->error);
      $equips = file("Equip.flat");
      foreach ($equips as $equipstring)
      {
          $equipstring = rtrim($equipstring);
          $equip  = preg_split("/ +/", $equipstring);
          $query = "insert into Equipment values ('$equip[0]','$equip[1]')";
          $db->query($query) or die ("Invalid insert " . $db->error);
      } 
      $result = $db->query(
                "create table Corvettes_Equipment(Vette_id int not null, Equip int not null)") or die ("Invalid: " . $db->error);
      $equips = file("CorEq.flat");
      foreach ($equips as $equipstring)
      {
          $equipstring = rtrim($equipstring);
          $equip  = preg_split("/ +/", $equipstring);
          $query = "insert into Corvettes_Equipment values ('$equip[0]','$equip[1]')";
          $db->query($query) or die ("Invalid insert " . $db->error());
      } 
      echo "<b>The database has been initialized with the following tables:</b>";
      echo "<br /><br />";

      # Once the tables have been created, I show them for verification.  This
      # involves a query for each table, followed by printing out all of the
      # values in the table.  I have hard coded the keys into the array below.
      # We can also obtain the keys from the result of the query itself.  See
      # access_cars.php from the text for a way of doing this.

      $tables = array("Corvettes"=>array("Vette_id", 
                                   "Body_Style", "Miles", "Year", "State"),
                      "States"=>array("State_id", "State"),
                      "Equipment"=>array("Equip_id", "Equip"),
                      "Corvettes_Equipment"=>array("Vette_id", "Equip"));
      foreach ($tables as $curr_table=>$curr_keys):
         $query = "select * from " . $curr_table; #Define query
         $result = $db->query($query);  #Eval and store result
         $rows = $result->num_rows; #Det. num. of rows
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
         for ($i = 0; $i < $rows; $i++):  #For each row in result table
             echo "<tr align = center>";
             $row = $result->fetch_array();  #Get next row
             foreach ($keys as $next_key)  #For each column in row
             {
                  echo "<td> $row[$next_key] </td>"; #Write data in col
             }
             echo "</tr>";
         endfor;
         echo "</table><br />";
      endforeach;
?>
 </body>
</html>
