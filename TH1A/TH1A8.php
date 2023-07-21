<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$maxLengthString = '';

$minLength = PHP_INT_MAX;
$minLengthString = '';

foreach ($array as $string) {
    $length = strlen($string);
    
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxLengthString = $string;
    }
    
    if ($length < $minLength) {
        $minLength = $length;
        $minLengthString = $string;
    }
}


echo "Chuỗi lớn nhất là $maxLengthString, độ dài = $maxLength" . PHP_EOL;
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = $minLength" . PHP_EOL;
?>
