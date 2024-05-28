<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nilai = 0;?>
    <?= $nilai ?>

    <span style = "color: <?= $nilai >= 75 ? "green" : "red"?>" >
        <?= $nilai >= 75 ? "kompeten" : "belum kompeten" ?> 
    </span>
</body>
</html>