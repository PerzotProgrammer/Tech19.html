<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Księgarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    error_reporting(0);
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ksiegarnia";

    $con = "";
    try {
        $con = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $ex) {
        echo "Nie można połączyć z bazą danych!";
        exit();
    }

    if ($con->connect_errno != 0) {
        echo "Error: kod " . $con->connect_errno;
        exit();
    }

    $query = "SELECT CONCAT(klienci.imie, ' ', klienci.nazwisko, ' z miasta ', klienci.miejscowosc) FROM klienci";

    if ($output = $con->query($query)) {
        echo "W bazie mamy następujące osoby:<br>";
        while ($row = $output->fetch_array()) {
            // echo $row["imie"] . " " . $row["nazwisko"] . " z miasta " . $row["miejscowosc"] . "<br>";
            echo $row[0] . "<br>";
        }
    }
    $con->close();
?>
</body>
</html>
