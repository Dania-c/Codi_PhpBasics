<?php

function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo "$string is a palindrome";
  else
  echo "$string is not a palindrome";
}
check_palindrome('madam');
echo "<br>";
check_palindrome('banbanab');
echo "<br>";

?>
