<?php
    $mahasiswa = [
        ["Risky Kurniawan", "2009106050", "Sebulu", "Universitasa Mulawarman"],
        ["Ronaldo", "2104106051", "Sebulu", "Universitasa Sebulu"],
        ["Messi", "3009103052", "Sebulu", "Institut Teknologi Bloro"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $s):?>
                <li>Nama: <?= $s[0]?></li>
                <li>NIM: <?= $s[1]?></li>
                <li>Asal:  <?= $s[2]?></li>
                <li>Universitas: <?= $s[3]?></li>
                <br>
        <?php endforeach;?>
    </ul>
</body>
</html>