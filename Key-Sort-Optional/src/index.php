<?php
// Key Sort
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "<h1>Data Before Key Sort:</h1>";
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

ksort($age);
echo "<h1>Data After Key Sort:</h1>";
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>