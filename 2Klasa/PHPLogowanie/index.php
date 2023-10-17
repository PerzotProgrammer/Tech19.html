<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graphp - logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="margTop">
        <h1>Witaj na stronie graphp.pl</h1>
        <p>Zaloguj się na swoje konto:</p>
        <form action="login.php" method="post">
            Login: <input type="text" name="login"> <br>
            Hasło: <input type="password" name="passwd"> <br>
            <input type="submit" value="Zaloguj się">
        </form>
        <br>
        <form action="register.php">
            <label>Nie masz konta? </label>   
            <input type="submit" value="Zarejestruj się">
        </form>
        <br>
        <?php
            if (isset($_SESSION["logged"]) && $_SESSION["logged"]) header("Location: stronaglowna.php");
            if (isset($_SESSION["error"])) echo $_SESSION["error"];
        ?>
    </div>
</body>
</html>

