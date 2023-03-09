<?php
function dbJungtis()
{
    try {
        //PDO - php database object
        return $pdo = new PDO('mysql:host=127.0.0.1; dbname=homework', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function visosUzduotys($pdo)
{
    $teiginys = $pdo->prepare('SELECT * FROM ndarbai');
    $teiginys->execute();

    return $teiginys->fetchAll(PDO::FETCH_CLASS, 'namuDarbas');
}
