<!DOCTYPE html>
<html>
 <head>
  <title>Third PHP Example</title>
 </head>
 <body>
 <?php 
 	 echo "<p><h2>Initial script</h1>";
	 include("ex3b.php");
	 echo "<h2>Back to initial script</h2>";
	 include("ex3c.html");
	 echo "<h2>Back again to script</h2></p>";
	 include("ex3wrong.php");
	 echo "<h2>Finally back to script</h2></p>";
  ?>
 </body>
</html>
