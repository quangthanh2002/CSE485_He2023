<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$result = '';
$count = count($names);
for ($i = 0; $i < $count; $i++) {
    $result .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}, ";
}

$result = rtrim($result, ', ');

echo $result;
?>
