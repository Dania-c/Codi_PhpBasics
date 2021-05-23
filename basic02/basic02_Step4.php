<?php
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($number == $sum)
    {echo "$number is armestrong nb";}
     else
    // not an armstrong number   
    {echo "$number is not armestrong nb"; }  
}

armstrongCheck(704);
echo "<br>";
armstrongCheck(407);
?>
