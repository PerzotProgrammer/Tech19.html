<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graphp - rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="margTop">
    <h2>Zarejestruj swoje konto:</h2>
    <form action="addToBase.php" method="post">
        Nick: <input type="text" name="nick"> <br>
        Login: <input type="text" name="login"> <br>
        Hasło: <input type="password" name="passwd"> <br>
        <input type="submit" value="Zarejestruj się">
    </form>
    <br>
    <form action="index.php">
        <label>Posiadasz już konto? </label>   
        <input type="submit" value="Zaloguj się">
    </form>
    <br>
    <?php
    if (isset($_SESSION["regInfo"])) echo $_SESSION["regInfo"];
    ?>
    </div>
</body>
</html>