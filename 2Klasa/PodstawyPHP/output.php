<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tak masz na imie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    error_reporting(0);
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    if (empty($fname) || empty($sname)) printf("<div id='title'>Nie masz imienia</div>");
    else printf("<div id='title'>" . "Nazywasz się " . $fname . " " . $sname . " </div>");
?>
</body>
</html>