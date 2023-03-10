<?php
require __DIR__ . '/../app/src/app.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rojo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" defer></script>
	<script src="../app/js/fancybox-custom.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:ital,wght@0,400;0,500;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">

</head>

<body>
    <div class="title">
        <?php include '../app/views/header.php';
        include '../app/views/hero.php'; ?>
    </div>
    <?php
    include '../app/views/content.php';
    include '../app/views/footer.php';
    ?>
</body>

</html>