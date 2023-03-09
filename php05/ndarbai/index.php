<?php
    require 'functions.php';
    require 'namudarbas.php';

    $pdo = dbJungtis();
    $namuDarbai = visosUzduotys($pdo);

    require 'vaizdas.php';
?>