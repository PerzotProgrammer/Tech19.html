<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liczby pierwsze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $num1 = $_POST['pNum'];
    for ($i = 2; $i <= $num1; $i++) {
        if (IsPrime($i)) echo "<div class='num'>" . $i . ": jest liczbą pierwszą</div><br>";
        else echo "<div class='num'>" . $i . ": nie jest liczbą pierwszą</div><br>";
    }

    function IsPrime(int $num): bool
    {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }
    
?>
</body>
</html>
