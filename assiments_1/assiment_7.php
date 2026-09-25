<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 19;
$b = 26;
$hcf = 1;

$min = ($a < $b) ? $a : $b;

for ($i = 1; $i <= $min; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $a and $b is: $hcf";
?>
</body>
</html>