<?php
    session_start();
    session_unset();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przeglądarka osób</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>Przeglądarka osób</h1>
    <div>
        <form action="output.php" method="post">
            <label>
                Wyszukaj po imieniu:
                <input type="text" name="imie">
            </label>
            <br>
            <label>
                Wyszukaj po nazwisku:
                <input type="text" name="nazwisko">
            </label>
            <br><br>
            <input type="submit" value="Szukaj">
        </form>
        <label>
            Chcesz dodać osoby?
            <input type="button" value="Kliknij tutaj" onclick="location.href ='dodaj.php'">
        </label>
    </div>
    
</div>
</body>
</html>