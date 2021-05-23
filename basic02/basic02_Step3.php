<?php

$var1 = 32;
$var2 = 45;
echo " var1 was $var1 , var2 was $var2 ";
function swap(&$var1, &$var2) {
    $tmp=$var1;
    $var1=$var2;
    $var2=$tmp;
}
swap($var1, $var2);
echo "<br>";
echo " var1 becomes $var1 , var2 becomes $var2 ";
?>
