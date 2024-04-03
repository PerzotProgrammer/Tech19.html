<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liczby</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    error_reporting(0);
    $numA = $_POST["numA"];
    $numB = $_POST["numB"];
    if (empty($numA) || empty($numB)) printf("<div id='title'>Podaj obydwie liczby!</div>");
    else {
        printf("<div id='title'>Liczba " . $numA . " jest:<br>" . IsEven($numA) . " " . IsPrime($numA) . "</div>");
        printf("<div id='title'>Liczba " . $numB . " jest:<br>" . IsEven($numB) . " " . IsPrime($numB) . "</div>");
    }

    function IsEven(int $num): string
    {
        if ($num % 2 == 0) return "Parzysta";
        return "Nieparzysta";
    }

    function IsPrime(int $num): string
    {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) return "Niepierwsza";
        }
        return "Pierwsza";
    }

?>
</body>
</html>