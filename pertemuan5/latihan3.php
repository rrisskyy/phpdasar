<?php
    $mahasiswa = [
        ["Risky Kurniawan", "2009106050", "Sebulu", "Universitas Mulawarman"],
        ["Ronaldo", "2104106051", "Sebulu", "Universitas Sebulu"],
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
    
    <?php foreach($mahasiswa as $siswa): ?>
        <ul>
        <li>Nama: <?= $siswa[0] ?></li>
        <li>NIM: <?= $siswa[1] ?></li>
        <li>Alamat: <?= $siswa[2] ?></li>
        <li>Perguruan Tinggi: <?= $siswa[3] ?></li><br>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>