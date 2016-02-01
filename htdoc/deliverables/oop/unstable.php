<?php
   // This function will load any class files we need
   function __autoload($class) {
	require_once $class . '.php';
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>CS 1520 PHP Stability Example</title>
</head>
<body>
<?php	
	// Mergesort code thanks to shamittomar, taken from stackoverflow.com.  See:
	// http://stackoverflow.com/questions/4353739/preserve-key-order-stable-sort-when-sorting-with-phps-uasort
	function mergesort(&$array, $cmp_function = 'strcmp') {
    	// Arrays of size < 2 require no action.
    	if (count($array) < 2) return;
    	// Split the array in half
    	$halfway = count($array) / 2;
    	$array1 = array_slice($array, 0, $halfway);
    	$array2 = array_slice($array, $halfway);
    	// Recurse to sort the two halves
    	mergesort($array1, $cmp_function);
    	mergesort($array2, $cmp_function);
    	// If all of $array1 is <= all of $array2, just append them.
    	if (call_user_func($cmp_function, end($array1), $array2[0]) < 1) {
        	$array = array_merge($array1, $array2);
        	return;
    	}
    	// Merge the two sorted arrays into a single sorted array
    	$array = array();
    	$ptr1 = $ptr2 = 0;
    	while ($ptr1 < count($array1) && $ptr2 < count($array2)) {
        	if (call_user_func($cmp_function, $array1[$ptr1], $array2[$ptr2]) < 1) {
            	$array[] = $array1[$ptr1++];
        	}
        	else {
            	$array[] = $array2[$ptr2++];
        	}
    	}
    	// Merge the remainder
    	while ($ptr1 < count($array1)) $array[] = $array1[$ptr1++];
    	while ($ptr2 < count($array2)) $array[] = $array2[$ptr2++];
    	return;
	}

	// Load some values that have the same name but differ in other fields
      $A[] = new User("Herb","123 Herb Way", "Herbtown", "PA", "12345");
      $A[] = new User("Herb","234 Herb Ave", "Herbville", "PA", "54321");
      $A[] = new User("Herb","345 Herb Place", "Herbopolis", "PA", "22222");
      $A[] = new User("Abner","123 Ab Way", "Abtown", "PA", "12345");
      $A[] = new User("Abner","234 Ab Ave", "Abville", "PA", "54321");
      $A[] = new User("Abner","345 Ab Place", "Abopolis", "PA", "22222");

	// Output the data
      foreach ($A as $user):
	  	echo "$user<br/>";
      endforeach;
      echo "<br/>";
      // Make a copy of the array for testing
      $B = $A;
      
// Sort on the names.  Since objects with the same name are equal, they will
// still be adjacent after the sort.  However, the relative orders of the
// equal items will not necessarily be preserved in the predefined sort.  To
// obtain a stable sort, we could instead use Mergesort, which is known to be
// stable (see code above).  See the output.
      usort($A, array('User', 'compare'));
      mergesort($B, array('User', 'compare'));
      
      echo "[Unstable] Output in sorted order:<br/>";
      foreach ($A as $user):
	  	echo "$user<br/>";
      endforeach;
      echo "<br/>";
      
      echo "[Stable] Output in sorted order:<br/>";
      foreach ($B as $user):
	  	echo "$user<br/>";
      endforeach;
      echo "<br/>";
?>
</body>
</html>
