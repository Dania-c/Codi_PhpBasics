<?php
function getFactorial($n)
{
    $x1=$n;
    $fac =1;
    while ($x1>=1)
    {
        $fac = $fac * $x1;
        $x1=$x1-1;
    }
    return $fac;
}

echo "fact of 5 is : ",getFactorial(5);
echo "<br>";
echo "fact of 6 is : ",getFactorial(6);
?>
