<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

$totalSum = array_sum($arrs);

$totalProduct = array_product($arrs);

$totalDifference = $arrs[0] - array_sum(array_slice($arrs, 1));

$totalQuotient = array_reduce($arrs, function ($carry, $item) {
    return $carry / $item;
}, $arrs[0]);

echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = " . $totalSum . "\n";
echo "Tích các phần tử = " . implode(' * ', $arrs) . " = " . $totalProduct . "\n";
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = " . $totalDifference . "\n";
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = " . $totalQuotient . "\n";
?>
