<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przeglądarka osób - Wynik zapytania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>Wynik zapytania</h1>
    <div>
        <?php
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];


        if ($nazwisko != "" && $imie != "") $query = "SELECT * FROM daneosob WHERE imie = '$imie' AND nazwisko = '$nazwisko'";
        else if ($imie != "") $query = "SELECT * FROM daneosob WHERE imie = '$imie'";
        else if ($nazwisko != "") $query = "SELECT * FROM daneosob WHERE nazwisko = '$nazwisko'";
        else $query = "SELECT * FROM daneosob";

        $host = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "osoby";

        $conn = @new mysqli($host, $dbuser, $dbpass, $dbname);
        if ($conn->connect_errno != 0) echo "Error:" . $conn->connect_errno;
        else {
            if ($output = $conn->query($query)) {
                echo "<table>";
                echo "<tr><td>ID</td><td>Imie</td><td>Nazwisko</td></tr>";
                while ($row = $output->fetch_array()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td></tr>";
                }
                echo "</table>";
            }
            $conn->close();
        }
        ?>
    </div>
</div>
</body>
</html>