<?php
# CS 1520 Summer 2015
# This script is similar in functionality to usesession.php.
# However, in this case the data for the user is maintained in
# an object.  Most comments from the original handout have been removed.
# See new comments relating to the differences in this from the
# original.

// Load classes needed
function __autoload($class) {
     require_once $class . '.php';
}
session_start();
date_default_timezone_set('America/New_York');
if (isset($_SESSION['option']))
   $option = $_SESSION['option'];

// Now we are storing a serialized version of a User object in the cookie.
// We check to make sure data is there before we unserialize it back into
// an object.
if (isset($_COOKIE['zany']))
   $info = unserialize($_COOKIE['zany']);

if (isset($option))   # if option exists, user is in a session
{
                                     # User has submitted information
   if (strcmp($option,'info') == 0)  # so store it in the session and
   {                                 # the cookie
        if ($_POST['name'])
        {
           // Create a User object from the data submitted by the user
           // For security purposes we should pre-process this data before
           // using it, but we will ignor that for now.
	   	   $info = new User($_POST['name'], $_POST['street'],
                            $_POST['city'], $_POST['state'], $_POST['zip']);

           // Serialize the data and make a cookie from it and store it in
           // a session variable
           $infoString = serialize($info);
           setcookie("zany", "$infoString", time()+600);
           $_SESSION['info'] = $infoString;
           $_SESSION['option'] = "choice";

           show_header();
           show_menu();
           show_end();
        }
        else # Some problem occurred -- close session
        { 
           show_header();
           echo "Invalid Session -- closing it <br />";
           show_end();
           unset($_SESSION["option"]);
           unset($_SESSION["info"]);
           unset($_SESSION["history"]);
           session_destroy();
        }
   } # end option info
   else  # User should have made a choice 
   {     # i.e. strcmp($option, 'choice') == 0

        $value = $_POST["value"];  # Get the choice
        $_SESSION["history"][] = $value;  # Update the history
        if ($value == 1):       # Show correct output based on choice
           show_header();
           show_info();
           show_menu();
           show_end();
        elseif ($value == 2):
           show_header();
           $time = time();
           $strtime = date("D F d h:i:s a", $time);  # see date() function
           echo "$strtime <br />";
           show_menu();
           show_end();
        elseif ($value == 3):
           show_header();
           $hist = $_SESSION["history"];
           foreach ($hist as $key => $value)
           {
                echo "$key: ";
                if ($value == 1):
                   echo "Show Info <br />";
                elseif ($value == 2):
                   echo "Show Time <br />";
                elseif ($value == 3):
                   echo "Show History <br />";
                elseif ($value == 4):
                   echo "Show Variables <br />"; 
                else:
                   echo "Unknown Command <br />";
                endif;
           } 
           show_menu();
           show_end();
        elseif ($value == 4):
           show_header();
           show_vars();
           show_menu();
           show_end();

        else:   # any other value
           show_header();
           echo "Thanks for visiting! <br />";
           echo "Your session has been closed";
           show_end();
           session_destroy();
        endif; # end choice other
   } # end choice
}  # end if option
elseif (isSet($info)) # Previous user returns to the site, so set up
{                     # the session and go right to the choice option
   $_SESSION['option'] = 'choice';
   // Put the user info back into the session variable and extract the name
   $_SESSION['info'] = serialize($info);
   $userid = $info->getName();
   show_header();
   echo "Welcome Back $userid <br />";
   show_menu();
   show_end();
}
else  # Cookie does not exist yet so prompt user for information.  The
      # cookie will be created when the information is processed in the
      # next execution of the script.
{
    $_SESSION['option'] = 'info';
    show_header();
    get_info();
    show_end();
}

function show_end()
{
    echo "</html>";
}

# Note how even in these function definitions we can freely switch between
# PHP mode and html mode and the execution logic still works

function show_header()
{
?>
<!DOCTYPE html>

<html>
<head>
<title>CS 1520 PHP Session Demo with Objects</title>
</head>
<?php
}
   
function show_menu()
{
   // Get user info from the session variable
   $info = unserialize($_SESSION['info']);
   $name = $info->getName();
   echo "<br /> $name, please choose an option ";
?>
   <form name = "menuform"
         action = "usesession-oop.php"
         method = "POST">
   1) Show your contact information <br />
   2) Show current date / time <br />
   3) Show your command history <br />
   4) Show your server variables <br />
   5) Exit <br />
   <input type = "text" name = "value" size = "4" maxlength = "4"><br />
   <input type = "submit" value = "Submit">
   </form>
<?php
}

function show_info()
{
   // Compare this to show_info() in the original version.  This is more
   // concise and more readable
   echo "Here is your contact information: <br />";
   $info = unserialize($_SESSION['info']);
   echo "$info</br>";
}

function get_info()
{
    echo "This is your first visit to my site <br />";
    echo "Please enter your contact information <br />";
?>
    <form name = "infoform"
         action = "usesession-oop.php"
         method = "POST">
    Name: <input type = "text" name = "name"><br />
    Street: <input type = "text" name = "street"><br />
    City: <input type = "text" name = "city"><br />
    State: <input type = "text" name = "state"><br />
    ZIP: <input type = "text" name = "zip"><br />
    <input type = "submit" value = "Submit">
    </form>
<?php
}

function show_vars()
{
    echo "Here are some of your variables: <br />";
    echo "SESSION: <br \>";
    foreach ($_SESSION as $key => $value):
         if (is_array($value)):
             echo "$key is an array: <br />";
             foreach ($value as $key2 => $value2):
                  echo "$key2 : $value2 <br />";
             endforeach;
         else:
             echo "$key : $value <br />";
         endif;
    endforeach;
    echo "<br \>";

    echo "COOKIE: <br \>";
    foreach ($_COOKIE as $key => $value):
         if (is_array($value)):
             echo "$key is an array: <br />";
             foreach ($value as $key2 => $value2):
                  echo "$key2 : $value2 <br />";
             endforeach;
         else:
             echo "$key : $value <br />";
         endif;
    endforeach;
    echo "<br \>";
 
    echo "POST: <br \>";
    foreach ($_POST as $key => $value):
         echo "$key : $value <br />";
    endforeach;
}
