<?php
# Script using sessions and cookies to maintain state information.
# Repeat users are detected using a cookie.  Once the user is in, a
# session is used to keep track of the state.  The user has a simple
# menu of options, all using the same script file.  Note that the
# session will work across different php scripts as well. 

# Start a session and a test a session variable to indicate if a user is
# just logging in or is already been using the site.  By default sessions
# in PHP are implemented using cookies -- however, you will note that they
# are much easier to use than cookies. The $_SESSION array is where
# session variables are stored during a script execution -- between
# executions they are stored on the server -- only a session id is stored
# on the client.
#
# Cookies are also used directly in this handout.  If a cookie for the
# server exists on the client, the client has visited this site before.
# In this way we can recognize previous clients.  Recall that cookies must
# be passed to the client with the http header -- before any of the actual
# html.  The setcookie() function sets up the cookie to be sent, as
# long as it is called before any of the html tags have been
# processed.

# Since by default sessions use cookies, and since cookies must be passed
# with the HTTP Header, you need to start a session BEFORE any HTML tags in
# your code.
session_start();

// Time zone is needed for the date() function used below
date_default_timezone_set('America/New_York');

if (isset($_SESSION['option']))
    $option = $_SESSION['option'];
else
    $option = 0;
if (isset($_COOKIE['zany']))
    $info = $_COOKIE['zany'];

# The 'option' session variable is used to store the type of operation
# that the server will perform.  It has 2 possible values:
# 'info' -- On the next execution the server will process contact
#           information submitted by the user.  This option is only set
#           for a new user when first logging in
# 'choice' -- On the next execution the server will process a menu choice
#             value entered by the user
# If 'option' is not set at all, this means that the user is not
# currently in an active session -- so set up the session variables
# appropriately.

if ($option)   # if option exists, user is in a session
{
                                     # User has submitted information
   if (strcmp($option,'info')== 0)   # so store it in the session and
   {                                 # the cookie
        if (isset($_POST['name']))
        {
	   		$info['name'] = $_POST['name'];
        	$info['street'] = $_POST['street'];
        	$info['city'] = $_POST['city'];
        	$info['state'] = $_POST['state'];
        	$info['zip'] = $_POST['zip'];
	   		$name = $info['name'];
        	$street = $info['street'];
        	$city = $info['city'];
        	$state = $info['state'];
        	$zip = $info['zip'];

           # Note how the cookie is set here.  It looks like it should not
           # work but it is actually creating the new cookie data as a
           # keyed array.  On the client this is actually multiple cookies
           # but through PHP we can access it as a single array.
           # The expiration time is 600 seconds in the future,
           # or 10 minutes.  Note that this script does not re-register the
           # cookie with successive logins once it has been created. Thus,
           # after 10 minutes from the initial login, if a user logs out
           # and in again, the cookie will have expired and he/she will have
           # to re-enter the information.
        	setcookie("zany[name]", "$name", time()+600);
        	setcookie("zany[street]", "$street", time()+600);
        	setcookie("zany[city]", "$city", time()+600);
        	setcookie("zany[state]", "$state", time()+600);
        	setcookie("zany[zip]", "$zip", time()+600);
        	$_SESSION['info'] = $info;
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
           $strtime = date("Y-m-d-H:i:s", $time);  # see date() function
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
       
        # When a user "logs out" you should unset the session variables 
        # and destroy the session.  This way, if the page is refreshed
        # you can test for a new session and respond accordingly. 

        else:   # any other value
           show_header();
           echo "Thanks for visiting! <br />";
           echo "Your session has been closed";
           show_end();
           // We can unset session variables as shown below, or simply
           // destroy the entire session (more drastic).
           #unset($_SESSION["option"]);
           #unset($_SESSION["info"]);
           #unset($_SESSION["history"]);
           session_destroy();
        endif; # end choice other
   } # end choice
}  # end if option
elseif (isset($info)) # Previous user returns to the site, so set up
{                     # the session and go right to the choice option
   $_SESSION['option'] = 'choice';
   $_SESSION['info'] = $info;
   $userid = $info['name'];
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
<title>CS 1520 PHP Session Demo</title>
</head>
<?php
}
   
function show_menu()
{
   $info = $_SESSION['info'];
   $name = $info['name'];
   echo "<br /> $name, please choose an option ";
?>
   <form name = "menuform"
         action = "usesession.php"
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
   echo "Here is your contact information: <br />";
   $info = $_SESSION['info'];
   foreach ($info as $key => $value):
       echo "$key : $value <br />";
   endforeach;
}

function get_info()
{
    echo "This is your first visit to my site <br />";
    echo "Please enter your contact information <br />";
?>
    <form name = "infoform" action = "usesession.php" method = "POST">
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
