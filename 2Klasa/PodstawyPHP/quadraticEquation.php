<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Równanie kwadratowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    error_reporting(0);
    $numA = $_POST["numA"];
    $numB = $_POST["numB"];
    $numC = $_POST["numC"];
    if (empty($numA) || empty($numB)) printf("<div id='title'>Podaj obydwie liczby!</div>");
    else {
        printf("<div id='title'>" . QuadraticEquation1($numA, $numB, $numC) . "</div>");
        printf("<div id='title'>" . QuadraticEquation2($numA, $numB, $numC) . "</div>");
    }

    function Delta(int $numA, int $numB, int $numC): float
    {
        return (float)pow($numB, 2) - 4 * $numA * $numC;
    }

    function QuadraticEquation1(int $numA, int $numB, int $numC): float
    {
        return (float)(-$numB - sqrt(Delta($numA, $numB, $numC))) / 2 * $numA;
    }

    function QuadraticEquation2(int $numA, int $numB, int $numC): float
    {
        return (float)(-$numB + sqrt(Delta($numA, $numB, $numC))) / 2 * $numA;
    }

?>
</body>
</html>