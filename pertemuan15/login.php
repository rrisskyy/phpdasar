<?php 
    require 'functions.php';
    if( isset($_POST["submit"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
        if ( mysqli_num_rows($result) === 1 ){
            $rows = mysqli_fetch_assoc($result);
            if (password_verify($password, $rows["password"])){
                header("Location: blackclover.php");
                exit;
            }// else {
                // echo " <script>
                // alert('Password yang anda masukkan salah!')
                // </script>";
           // }
            
        } //else {
            // echo " <script>
            //     alert('Username tidak ditemukan!')
            //     </script>";
        //}
        
        $error = true;
    };
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
        <img class="mb-4" src="img/blackbullspng.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-black ">Sign-in</h1>
        <input type="text" name="username" class="form-control" placeholder="Username..." autofocus required autocomplete="off">
        <br>
        <input type="password" name="password" class="form-control" placeholder="Add Password..." required autocomplete="off"> 
        <?php if (isset($error)): ?>
            <p style="color: red; font-style:italic;">Username / Password salah!</p>
        <?php endif; ?>
        <p class="text-muted">Belum memiliki akun? <a href="registrasi.php">Sign-up!</a></p>
        <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Sign-in!</button>
        <p class="mt-5 mb-3 text-muted">&copy;Riss 2020</p>
</body>
</html>