<?php
   // Very simple script to initialize a MySQL table
   
   if (isset($_POST['user']))
   {
   		// Get MySQL ID and Password.  In a production system this would only be done for
   		// admin access and should never be done with clear (plain) text.  If a password
   		// is being entered then https should be used.  We will discuss https soon.
   		$user = $_POST['user'];
   		$pass = $_POST['pass'];
   
   		// We will assume the user name and the DB name are the same.  This code will
   		// make a new mysqli object which represents a connect to the specified DB.
   		$db = new mysqli('localhost', "$user", "$pass", "$user");
   
   		if ($db->connect_error): 
       		die ("Could not connect to db: " . $db->connect_error); 
  		endif;
  		
  		// Drop old table and recreqte same table.  Be careful using this command -- you
  		// normally don't want to wipe out an entire table unless it is saved elsewhere.
   		$result = $db->query("drop table CD");
   		$result = $db->query("create table CD (id int primary key not null, title char(30) not null, artist char(30))") or die ("Invalid: " . $db->error);
 
   		$query = "insert into CD values (1, 'Version 2.0', 'Garbage')"; 
   		$db->query($query) or die ("Invalid insert " . $db->error); 

   		$query = "insert into CD values (2, 'Substance', 'Joy Division')";
   		$db->query($query) or die ("Invalid insert " . $db->error); 

   		$query = "insert into CD values (3, 'Zooropa', 'U2')"; 
  		$db->query($query) or die ("Invalid insert " . $db->error);
  		
  		show_head();
  		
  		// Show contents of the table.  We will discuss selection queries soon.
  		echo "<h3>Here is your data:</h3>";
  		$query = "select * from CD";
  		$result = $db->query($query);
  		$rows = $result->num_rows;
  		for ($i = 0; $i < $rows; $i++):
  			$row = $result->fetch_array();
  			foreach ($row as $key=>$val):
  				echo "$key:$val  ";
  			endforeach;
  			echo "<br/>";
  		endfor;
  		show_end();
  	}
  	else
  	{
  		show_head();
  		show_form();
  		show_end();
  	}
  	
  	function show_head()
  	{
?>
<!doctype html>
<html>
   <head>
       <title>Generating a Simple Table</title>
   </head>
   <body>
<?php
    }
    
    function show_form()
    {
?>
		<h3>Demo of creating a simple MySQL table</h3>
		<form method="POST" action="setCDs.php">
		MySQL User Name (and DB Name): <input type='text' name='user'><br/>
		MySQL Password: <input type='password' name='pass'><br/>
		<input type='submit' value='Submit'>
		</form>
<?php
	}
	
	function show_end()
	{
		echo "</body></html>";
	}
?>
