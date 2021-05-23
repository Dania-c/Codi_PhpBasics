<?php

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = 8;
if (IsPrime($a)==0)
echo "$a is not a Prime Number.....";
else
echo "$a is a Prime Number..";

?>
