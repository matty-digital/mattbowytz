<?
  // Some functions for displaying arrays in PHP
  function showa($a) {
    # Note how the foreach construct iterates through the
    # items in the array in the order that they were GENERATED,
    # NOT in the index order. 
    if (is_array($a)):
      foreach ($a as $key=>$value):
        echo "$key has value $value <br/>\n";
      endforeach;
    elseif (isset($a)):
      echo "Scalar: $a <br/>\n";
    else:
      echo "Unset variable <br/>\n";
    endif;
    echo "<br/>\n";
  }

  function showb($a) {
    # This function will print out index values from 0 to size
    # of the array, but, since the keys in PHP arrays are not
    # always integers (and do not necessarily start at 0), this
    # may not have the desired effect in many cases.

    if (is_array($a)):
      for ($i = 0; $i < count($a); $i++):
        echo "\$a[$i] = $a[$i] <br/>\n";
      endfor;
    endif;
    echo "<br/>\n";
  }
?>
