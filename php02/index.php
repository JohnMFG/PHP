<?php
    setcookie("name", "Valdus Adamkus", time()+3600, "/", "", 0);
    setcookie("age", "92", time()+3600, "/", "", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failo skaitymas su PHP</title>
</head>
<body>
    <?php
        $filename = 'text.txt';
        $file = fopen($filename, "r");

        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        fclose($file);

        echo "Failo dydis: $filesize B";
        echo "<pre>$filetext</pre>";
    ?>

    <?php
        if(isset($_COOKIE["name"])){
            echo 'Welcome, ' . $_COOKIE["name"] . '<br>';
            echo 'You are ' . $_COOKIE["age"] . ' years old';
        }else{
            echo "Who are you?";
        }
    ?>

    <?php
        function multiply($a, $b){
            return $a*$b;
        }
        echo '<br>';
        echo multiply(4,4);
    ?>
<!-- ------------------------------- -->
    <?php
     echo '<br>';
    if(isset($_POST['submit'])){
        if($_POST['aSide'] && $_POST['bSide']){
            echo multiply($_POST['aSide'], $_POST['bSide']);
        }
    }else{
        ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
        Krastine a: <input type="number" name="aSide" />
        Kraastine b: <input type="number" name="bSide" />
        <input type="submit" name="submit">
        </form>
        <?php
        }
    ?>




    <?php
        function fullName($name, $surname){
            return $name . " " . $surname;
        }
        echo '<br>';
        // echo fullName('la', 'bas');
    ?>
    <?php
     echo '<br>';
    if(isset($_POST['submit1'])){
        if($_POST['name'] && $_POST['surname']){
            echo fullName($_POST['name'], $_POST['surname']);
        }
    }else{
        ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
        Vardas: <input type="text" name="name" />
        Pavarde: <input type="text" name="surname" />
        <input type="submit" name="submit1">
        </form>
        <?php
        }
    ?>
<!-- ----------- -->

</body>
</html>