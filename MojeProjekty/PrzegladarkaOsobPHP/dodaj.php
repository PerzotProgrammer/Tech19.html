<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przeglądarka osób - dodawanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>Dodaj osoby</h1>
    <div>
        <form action="add.php" method="post">
            <label>
                Imie:
                <input type="text" name="imie">
            </label>
            <br>
            <label>
                Nazwisko:
                <input type="text" name="nazwisko">
            </label>
            <br><br>
            <input type="submit" value="Dodaj">
        </form>
        <label>
            <input type="button" value="Powrót" onclick="location.href ='index.php'">
        </label>
    </div>
    <?php
        if (isset($_SESSION["addInfo"])) echo $_SESSION["addInfo"];
    ?>
</body>
</html>