<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h3>Mano namu darbai:</h3>
    <ul>
        <?php foreach($namuDarbai as $namuDarbas) : ?>
            <li>
                <?php if($namuDarbas->atlikta) : ?>
                    <del><?= $namuDarbas->aprasas; ?></del>
                <?php else : ?>
                    <?= $namuDarbas->aprasas; ?>
                <?php endif; ?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>