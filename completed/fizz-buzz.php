<?php
  $i = 1;

  while ($i <=100) {
    if (0 == $i % 15) {
      echo 'fizzbuzz'; 
    }
    elseif (0 == $i % 3) {
        echo 'fizz';
    }
    elseif (0 == $i % 5) {
        echo 'buzz'; 
    }
    else {
        echo $i;
    }

    echo '<br>';
    $i++;
  }  


?>