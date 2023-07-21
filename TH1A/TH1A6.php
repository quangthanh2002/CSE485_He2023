<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin từ hai mảng</title>
</head>
<body>
    <h2>Mảng kết quả:</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php

        $keys = array(
            "field1" => "first",
            "field2" => "second",
            "field3" => "third"
        );

        $values = array(
            "field1value" => "dinosaur",
            "field2value" => "pig",
            "field3value" => "platypus"
        );

        
        $keysAndValues = array();
        foreach ($keys as $key => $label) {
            $valueKey = $key . "value";
            if (isset($values[$valueKey])) {
                $keysAndValues[$label] = $values[$valueKey];
            }
        }

        
        foreach ($keysAndValues as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
