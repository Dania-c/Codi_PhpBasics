<?php

function getSum($num) {
    
    $x = $num; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem; 
        $x = $x / 10; 
    }
    return $sum;
}

echo getSum("523");
echo "<br>";
echo getSum("111");
echo "<br>";
echo getSum("40002");

?>
