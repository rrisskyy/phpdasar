<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat datang, Admin</h1>
    <ul>
    <li>Username: <?= $_POST["nama"]?></li>
    <li>Password: <?= $_POST["password"]?></li>
    </ul>
    <a href="login.php">Logout</a>
</body>
</html>