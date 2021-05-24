<?php
function sumalld($nums) {
    $dgsum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $dgsum += $nums[$i];
               }
      return $dgsum;
}
echo sumalld("12345");
echo "<br>";
echo sumalld("9999");
?>
