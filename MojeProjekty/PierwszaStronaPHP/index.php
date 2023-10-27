<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwsza Strona PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<div id="main">
    <h1>A OTO WYNIK TWOJEJ KWERENDY</h1>
    <input type="button" onclick="Show()" value="Pokaż to">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $base = "ptaki";

    $connection = new mysqli($server, $user, $pass, $base);

    $table = "gatunki";
    $column = "nazwa_zwyczajowa";

    $query = "SELECT $column FROM $table ORDER BY $column ASC";

    echo "<ol id='list'>";
    if ($output = $connection->query($query)) while ($row = $output->fetch_array()) echo "<li>" . $row[$column] . "</li>" . "<br>";
    echo "</ol>";

    mysqli_close($connection);
    ?>
</div>

</body>
</html>