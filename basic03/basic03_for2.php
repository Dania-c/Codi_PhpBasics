<?php
$e1 = 3; 
$e2 = 4;
$di = 5;
function checkQuadri($e1,$e2,$di){
$rec = 0;
$dia = 0;   
    if ($e1 * $e1 + $e2 * $e2 === $di * $di) {
        $rec++;
    }
    if ($e1 === $e2) {
        $dia++;
    } 
if ($rec>0)
echo "This is a rectangle.";
if ($dia>0)
echo "This is a rhombus.";
}
checkQuadri(3,4,5);
?>
