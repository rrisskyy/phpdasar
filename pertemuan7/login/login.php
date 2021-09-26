<?php
    if (isset($_POST["submit"])){
        if ($_POST["nama"] == "Risky" && $_POST["password"] == "Kurniawan"){
            
            header("Location: admin.php");
            exit;
        }
        else {
            $passwordSalah = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riss</title>
    <link rel="icon" href="img/logo(1).png">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center">
    <form class="form-signin" method="post">
        <img class="mb-4" src="img/logo(1).png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" id="inputUsername" class="form-control" placeholder="Username" name="nama"  required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
        <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me"> Remember me</label>
        <?php if (isset ($passwordSalah)){?>
        <p class="salah"><?php echo "Username atau Password tidak valid" ?></p>
        <?php }?>   
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy;Riss 2020</p>
    </form>
</body>
</html>