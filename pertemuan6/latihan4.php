<?php
    $mahasiswa = [
        [
            "nama" => "Risky Kurniawan", 
            "nim" => "2009106050", 
            "asal" => "Sebulu", 
            "univ" => "Universitasa Mulawarman",
            "gambar" => "1.png"
        ],
        
        [
            "nama" => "Gojo", 
            "nim" => "281906050", 
            "asal" => "Sebulu", 
            "univ" => "Universitasa Sebulu",
            "gambar" => "2.png"
        ],
   
        [
            "nama" => "Yuji", 
            "nim" => "149106050", 
            "asal" => "Sebulu", 
            "univ" => "Institut Teknologi Sirbaya",
            "gambar" => "3.png"
        ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $s):?>
                <li><img src="img/<?= $s["gambar"]?>" width="100px"></li>
                <li>Nama: <?= $s["nama"]?></li>
                <li>NIM: <?= $s["nim"]?></li>
                <li>Asal:  <?= $s["asal"]?></li>
                <li>Universitas: <?= $s["univ"]?></li>
                <br>
        <?php endforeach;?>
    </ul>
</body>
</html>