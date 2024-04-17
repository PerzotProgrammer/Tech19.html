<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Największy wspólny dzielnik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo "<div class='num' style='margin-top: 200px;'>NWD " . $num1 . " i " . $num2 .
        " to " . GreatestCommonDivisor($num1, $num2) . "</div><br>";
    echo "Aktualna godzina: " . date("h:i - d-m-Y");
    function GreatestCommonDivisor(int $a, int $b): int
    {
        while ($a != $b) {
            if ($a > $b) $a -= $b;
            else $b -= $a;
        }
        return $a;
    }

?>
</body>
</html>