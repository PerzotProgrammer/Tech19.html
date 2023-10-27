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
        $nick = $_POST["nick"];
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];


        $query = "SELECT * FROM danegraczy WHERE nick = '$nick'";

        if ($output = @$conn -> query($query))
        {
            $userExists = $output -> num_rows;
            if ($userExists > 0)
            {
                $_SESSION["regInfo"] = "<span style='color:red'>Taki nick już istnieje!</span>";
                header("Location: register.php");
                exit();
            }
        } 

        $query = "SELECT * FROM danegraczy WHERE login = '$login'";
        
        if ($output = @$conn -> query($query))
        {
            $userExists = $output -> num_rows;
            if ($userExists > 0)
            {
                $_SESSION["regInfo"] = "<span style='color:red'>Taki mail już istnieje!</span>";
                header("Location: register.php");
                exit();
            }
        }

        if (empty($nick) || empty($login) || empty($passwd))
        {
            $_SESSION["regInfo"] = "<span style='color:red'>Wypełnij wszystie pola!</span>";
            header("Location: register.php");
            exit();
        }
        
        $query = "INSERT INTO `danegraczy`(`id`, `nick`, `login`, `passwd`, `monety`, `drewno`, `kamien`, `zelazo`) VALUES 
        (NULL,'$nick','$login','$passwd','1000','500','250','100')";

        if ($output = @$conn -> query($query))
        {
            $_SESSION["regInfo"] = "<span style='color:green'>Operacja zakończona sukcesem!</span>";
            header("Location: register.php");
            exit();
        }
        $_SESSION["regInfo"] = "<span style='color:red'>Coś poszło nie tak!</span>";
        header("Location: register.php");
    }
    $conn -> close();
?>