<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];


$firstElement = reset($numbers);
$lastElement = end($numbers);


$minValue = min($numbers);
$maxValue = max($numbers);
$totalSum = array_sum($numbers);
  

$ascendingValues = $numbers;
asort($ascendingValues); 
$descendingValues = $numbers;
arsort($descendingValues); 


$ascendingKeys = $numbers;
ksort($ascendingKeys); 
$descendingKeys = $numbers;
krsort($descendingKeys); 


echo "Phần tử đầu tiên: " . $firstElement . "\n";
echo "Phần tử cuối cùng: " . $lastElement . "\n";
echo "Số nhỏ nhất: " . $minValue . "\n";
echo "Số lớn nhất: " . $maxValue . "\n";
echo "Tổng các giá trị: " . $totalSum . "\n";
echo "Mảng theo chiều tăng giá trị:\n";
print_r($ascendingValues);
echo "Mảng theo chiều giảm giá trị:\n";
print_r($descendingValues);
echo "Mảng theo chiều tăng key:\n";
print_r($ascendingKeys);
echo "Mảng theo chiều giảm key:\n";
print_r($descendingKeys);
?>
