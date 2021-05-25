<?php
function RevertStr ($str){
   
$i = 0;
while( $d = $str[$i] )
{
    if( $d == " "){

        $out = " ".$temp.$out;
        $temp = "";
    }else{
        $temp.=$d;

    }
    $i++;
}
echo $temp.$out;
}
RevertStr("My Name is Fred");
?>
