<html>
<head>
<title>Comparing GET and POST</title>
</head>
<body>
<?php
       # Printing out submitted form values.  Also look in the URL of
       # the Web page to see difference between GET and POST

       echo "POST variables: <br />";
       while ($curr = each($_POST)): 
            $key = $curr["key"];
            $val = $curr["value"];
            echo "$key is $val <br />";
       endwhile;

       echo "GET variables: <br />";
       while ($curr = each($_GET)): 
            $key = $curr["key"];
            $val = $curr["value"];
            echo "$key is $val <br />";
       endwhile;

       echo "REQUEST variables: <br />";
       while ($curr = each($_REQUEST)): 
            $key = $curr["key"];
            $val = $curr["value"];
            echo "$key is $val <br />";
       endwhile;
?>
</body>
</html>
