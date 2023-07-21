<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];


$value1 = $a['b']['o']['b'];

$value2 = $a['a']['c'];

$aInfo = $a['a'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>b</td>
            <td><?= $value1 ?></td>
        </tr>
        <tr>
            <td>c</td>
            <td><?= $value2 ?></td>
        </tr>
        <tr>
            <td>a</td>
            <td><?= print_r($aInfo, true) ?></td>
        </tr>
    </table>
</body>
</html>
