<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graphp - strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        $nick = $_SESSION["nick"];
        $monety = $_SESSION["monety"];
        $drewno = $_SESSION["drewno"];
        $kamien = $_SESSION["kamien"];
        $zelazo = $_SESSION["zelazo"];
        
        echo "
        <div class='margTop'>
        <h1>Witaj $nick! </h1> <br>
        <h2>Twoje zasoby: </h2> <br>
        <p> 
        Monety: $monety <br> 
        Drewno: $drewno <br> 
        Kamień: $kamien <br> 
        Żelazo: $zelazo <br>
        </p>
        </div>
        ";
    ?>
    <form action="logout.php">   
    <input type="submit" value="Wyloguj się">
    </form>
</body>
</html>