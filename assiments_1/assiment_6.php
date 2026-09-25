<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 6;
$b = 10;

$max = ($a > $b) ? $a : $b;

while (true) {
    if ($max % $a == 0 && $max % $b == 0) {
        $lcm = $max;
        break;
    }
    $max++;
}

echo "LCM of $a and $b is: $lcm";
?>
</body>
</html>