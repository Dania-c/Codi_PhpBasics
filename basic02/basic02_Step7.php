<?php

function strRep(&$input) {
    
    $input =str_replace("Python","PHP",$input);
    return $input;
}
$input1="Hello python small Python large !";
$input2="111 Python2 dfjw";
echo strRep($input1);
echo "<br>";
echo strRep($input2);
echo "<br>";

?>
