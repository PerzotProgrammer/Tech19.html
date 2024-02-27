<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PierwszyProjektPHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
    <?php
        $server = "localhost";
        $user = "root";
        $passwd = "";
        $base = "ptaki";

        $query = "SELECT ID_gatunku, nazwa_zwyczajowa, nazwa_lacinska FROM gatunki";

        $con = new mysqli($server, $user, $passwd, $base);

        if ($output = $con->query($query)) {
            echo "<table><tr id='titleRow'><td>ID</td><td>Nazwa zwyczajowa</td><td>Nazwa łacińska</td></tr>";
            while ($row = $output->fetch_array()) {
                echo "<tr><td>" . $row["ID_gatunku"] . "</td><td>" . $row["nazwa_zwyczajowa"] . "</td><td>" . $row["nazwa_lacinska"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Error: " . $con->errno . "<br>" . $con->error;
        }

        $con->close();
    ?>
</div>
</body>
</html>