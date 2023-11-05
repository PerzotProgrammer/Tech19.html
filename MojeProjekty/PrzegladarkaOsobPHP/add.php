<?php
    session_start();

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "osoby";

    if (empty($imie) || empty($nazwisko)) {
        $_SESSION["addInfo"] = "<span style='color:red'>Wypełnij wszystie pola!</span>";
        header("Location: dodaj.php");
        exit();
    }
    try {
        $conn = @new mysqli($host, $dbuser, $dbpass, $dbname);
    }
    catch (Exception $ex) {
        echo "<span style='color:red'>Nie można nawiązać połączenia z bazą!</span>";
        exit();
    }
    if ($conn->connect_errno != 0) {
        $_SESSION["addInfo"] = "<span style='color:red'>Coś poszło nie tak!<br>Error numer $conn->connect_errno</span>";
        header("Location: dodaj.php");
        exit();
    }
    $query = "INSERT INTO daneosob(id, imie, nazwisko) VALUES (NULL, '$imie', '$nazwisko')";
    if ($output = $conn->query($query)) {
        $_SESSION["addInfo"] = "<span style='color:green'>Operacja zakończona sukcesem!</span>";
        header("Location: dodaj.php");
        exit();
    }