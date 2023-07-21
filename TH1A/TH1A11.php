<?php
$array = array(1, 2, 3, 4, 5);

$indexToRemove = 2;
array_splice($array, $indexToRemove, 1);

$array = array_values($array);

print_r($array);

?>