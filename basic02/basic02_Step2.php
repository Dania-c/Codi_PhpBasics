<?php
function greaterFn($num){
    $answer ="";
    if ($num > 30) {
        $answer = "$num is greater than 30";
    }
    elseif ($num > 20){
        $answer = "$num is greater than 20";
    }
    elseif ($num > 10){
        $answer = "$num is greater than 10";
    }
    else {
        $answer = "$num is less than 10";
    }
    echo $answer ;
    
  }
  greaterFn(777); 
  echo "<br>";
  greaterFn(21);
  echo "<br>";
  greaterFn(12);
  echo "<br>";
  greaterFn(5);
?>
