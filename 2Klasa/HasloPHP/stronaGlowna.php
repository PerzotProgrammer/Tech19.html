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

    if (empty($login) || empty($password)) {
        header("LOCATION: index.html");
    }

    if ($login == 'admin' && $password == 'admin') {
        echo "<p id='title'>Możesz wejść</p>";
    } else {
        echo "<p id='title'>Idź człowieku, nie znam cię!</p>";
    }
?>
</body>
</html>