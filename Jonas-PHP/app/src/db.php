<?php
//define - konstanta
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "rojo");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error){
        echo 'Ups, turim klaida.';
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO questions (name, email, subject, message)
    VALUES('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')");
?>