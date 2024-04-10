<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $login = $_POST['login'];
    $password = $_POST['passwd'];

    if (empty($login) || empty($password)) header("LOCATION: index.html");

    if ($login != 'admin' || $password != 'admin') {
        echo "<p id='title' class='center'>Idź człowieku, nie znam cię!</p>";
        exit();
    }

    echo "<p id='title' class='center'>Możesz wejść</p><br><p class='center'>Masz tu losowe liczby:</p>";
    for ($i = 1; $i <= 10; $i++) echo "<p class='center rand'>" . rand(1, 100) . "</p><br>";
    $factorial = 5;
    echo "<p class='center'>Silnia z $factorial: " . Factorial($factorial) . "</p><br>";

    function Factorial(int $factorial): int
    {
        $output = 1;
        for ($temp = $factorial; $temp > 0; $temp--) $output *= $temp;
        return $output;
    }

?>
</body>
</html>