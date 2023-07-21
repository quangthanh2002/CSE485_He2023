<?php
function convertToUppercase($arr) {
    
    $uppercaseArr = array_map('strtoupper', $arr);
    
    return $uppercaseArr;
}

$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];

$resultArrs1 = convertToUppercase($arrs1);
$resultArrs2 = convertToUppercase($arrs2);

print_r($resultArrs1);
print_r($resultArrs2);
?>
