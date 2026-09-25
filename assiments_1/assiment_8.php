<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Multiplication Table (12 x 12)</h3>

<table>
    <?php
    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 12; $col++) {
            $result = $row * $col;
            echo "<td>$row * $col = $result</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
</body>
</html>