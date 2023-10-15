<?php
    session_start();

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "graphp";
    
    $conn = @new mysqli($host,$dbuser,$dbpass,$dbname);

    if ($conn -> connect_errno != 0) echo "Error:".$conn -> connect_errno;
    else
    {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];

        $query = "SELECT * FROM danegraczy WHERE login = '$login' AND passwd = '$passwd'";

        if ($output = @$conn -> query($query))
        {
            $userExists = $output -> num_rows;
            if ($userExists > 0)
            {
                $row = $output -> fetch_assoc();

                $_SESSION["logged"] = true;
                $_SESSION["nick"] = $row["nick"];
                $_SESSION["monety"] = $row["monety"];
                $_SESSION["drewno"] = $row["drewno"];
                $_SESSION["kamien"] = $row["kamien"];
                $_SESSION["zelazo"] = $row["zelazo"];

                unset($_SESSION["error"]);
                header("Location: stronaglowna.php");
            }
            else
            {
                $_SESSION["error"] = "<span style='color:red'>Błędny login lub hasło!</span>";
                header("Location: index.php");
            }
        }
    }
    $conn -> close();
?>