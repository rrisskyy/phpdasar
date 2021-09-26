<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="<?php echo $_GET["gambar"]?>" alt=""></li>
        <li><?php echo $_GET["nama"]?></li>
        <li><?php echo $_GET["peringkat"]?></li>
        <li><?php echo $_GET["kekuatan"]?></li>
        <li><?php echo $_GET["kemampuan"]?></li>
        <li><?php echo $_GET["posisi"]?></li>
    </ul>
</body>
</html>