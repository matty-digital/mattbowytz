<!DOCTYPE html>
<html>
 <head>
	<title>Simple PHP Example</title>
 </head>
 <body>
 <?php
	$text = file("ex1.txt");
	echo "<div>";
	foreach ($text as $line) {
		// trim off newline
	  $line = rtrim($line);
	  // change "Text" to "PHP"
	  $line = preg_replace("/Text/i", "PHP", $line);		
	  // convert text url to actual html link
	  if (preg_match("/http/", $line)) {
	  	echo "<a href='$line'>Lorem Ipsum</a>";
	  } else {
	    echo "$line";
	  }
	}
	echo "</div>";
 ?>
 </body>
</html>
