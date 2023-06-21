<?php
// Duplicate Array
$a=array("a"=>"red","b"=>"green","c"=>"red");
echo "Before Remove: ";
print_r($a);
echo "<br>";
echo "After Remove: ";
print_r(array_unique($a));
?>