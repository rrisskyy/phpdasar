<?php 
    // Koneksi Ke DBMS
    $db = mysqli_connect("localhost", "root", "", "phpdasar");

    // Cek apakah tombol sudah ditekan atau belum
    if (isset($_POST["submit"])){
    // Ambil data dari elemen form
    $Picture = $_POST["Picture"];
    $Name = $_POST["Name"];
    $Power = $_POST["Power"];
    $Magic = $_POST["Magic"];
    $Grimoire = $_POST["Grimoire"];
    $Position = $_POST["Position"];

    $query = "INSERT INTO `blackbulls` 
                (`Picture`, `Name`, `Power`, `Magic`, `Grimoire`, `Position`) 
                VALUES 
                ('$Picture', '$Name', '$Power', '$Magic', '$Grimoire', '$Position')
    ";
    // Query Insert data
    mysqli_query($db, $query);

    // Cek apakah data ditambahkan atau tidak
    if(mysqli_affected_rows($db) > 0):
        $feedback = "Data Berhasil Dikirim";
    else:
        $feedback = "Data Gagal Dikirim";
        echo mysqli_error($db);
    endif;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riss</title>
    <link rel="icon" href="img/blackbullspng.png">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center">
    <form class="form-signin" action="" method="post">
        <?php if (isset($_POST["submit"])):?>
        <h3 class="text-white"><?= $feedback?></h3>
        <?php endif;?>
        <img class="mb-4" src="img/blackbullspng.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-white ">Add a Member</h1>
        <input type="text" name="Picture" class="form-control" placeholder="Add Picture..." required>
        <br>
        <input type="text" name="Name" class="form-control" placeholder="Add Name..." required>
        <br>
        <input type="number" name="Power" class="form-control" placeholder="Add Power..." required>
        <br>
        <input type="text" name="Magic"class="form-control" placeholder="Add Magic..." required>
        <br>
        <input type="text" name="Grimoire" class="form-control" placeholder="Add Grimoire..." required>
        <br>
        <input type="text" name="Position" class="form-control" placeholder="Add Position..." required>
        <br>
        </div>
        <br>
        <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Add Member</button>
        <br>
        <p class="mt-5 mb-3 text-muted">&copy;Riss 2020</p>
</body>
</html>