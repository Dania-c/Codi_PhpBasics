<?php
$grocery = array (
    "eggs"=>array('balade', 'mazere3' ),
    "milk"=>array('Fresh', 'Taanayel'),
    "water-pack"=>array('Tanoureen', 'Reem')
  );

echo " Hey Sir, Please I need 1 pack of balade eggs and 3 Reem Water Pack.";
echo "<br>";
echo  "Hey Sir, Please I need 1 pack of ".$grocery["eggs"][0]." ".key($grocery)." and 3 ".$grocery["water-pack"][1]." ";
next($grocery);next($grocery);
echo key($grocery);


?>