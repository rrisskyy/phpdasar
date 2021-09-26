<?php
    if (!isset($_GET["name"]) || !isset($_GET["rank"]) || !isset($_GET["power"])){
        header("Location: latihan1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Black Bulls</h1>
    <ul>
        <li><img src="img/<?= $_GET["img"]; ?>" alt=""></li>
        <li><?= $_GET["name"]; ?></li>
        <li><?= $_GET["rank"]; ?></li>
        <li><?= $_GET["power"]; ?></li>
        <li><?= $_GET["skill"]; ?></li>
        <li><?= $_GET["grimoire"]; ?></li>
        <li><?= $_GET["position"]; ?></li>
        <a href="blackclover.php">Kembali</a>
    </ul>
</body>
</html>