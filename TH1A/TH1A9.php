<?php
function convertToLowercase($arr) {
    
    $lowercaseArr = array_map('strtolower', $arr);
    
    return $lowercaseArr;
}

$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];

$resultArrs1 = convertToLowercase($arrs1);
$resultArrs2 = convertToLowercase($arrs2);

print_r($resultArrs1);
print_r($resultArrs2);
?>
