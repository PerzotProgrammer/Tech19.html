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
    } else {
        $conn = @new mysqli($host, $dbuser, $dbpass, $dbname);
        if ($conn->connect_errno != 0) echo "Error:" . $conn->connect_errno;
        else {
            $query = "INSERT INTO daneosob(id, imie, nazwisko) VALUES (NULL, '$imie', '$nazwisko')";
            if ($output = @$conn -> query($query))
            {
                $_SESSION["addInfo"] = "<span style='color:green'>Operacja zakończona sukcesem!</span>";
                header("Location: dodaj.php");
                exit();
            }
        }
    }