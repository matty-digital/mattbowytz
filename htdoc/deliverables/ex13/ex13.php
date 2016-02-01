<?php
// Example 13
// Simple demonstration of cookies and sessions in PHP
session_start();
if (isset($_SESSION["count"]))
   $s = (int) $_SESSION["count"];
if (isset($_COOKIE["cookie1"]))
   $c1 = $_COOKIE["cookie1"];
if (isset($_COOKIE["cookie2"]))
   $c2 = $_COOKIE["cookie2"];
if ((!isset($s)) && (!(isset($c1)))):
   setcookie("cookie1","You have visited the site 1 previous time",time()+600);
   $output = "You have not visited the site before";
elseif ((!(isset($s))) && (!(isset($c2)))):
   setcookie("cookie2","You have visited the site > 1 previous times",time()+600);
   $output = $c1;
elseif (!(isset($s))):
   $output = $c2;
else:
   $output = "";
endif;

if (!(isset($s)))
   $s = 1;
else
   $s++;
$_SESSION["count"] = $s;
?>
<!DOCTYPE html>
<html>
<head>
   <title>CS 1520 PHP Example 13</title>
</head>
<body>
<h3>
<?php
     echo "Welcome to the Example 13 PHP Site<br/>";
     if ($output):
         echo "$output<br/>";
     endif;
     echo "You have visited $s pages in the current session";
?>
</body>
</html>  
