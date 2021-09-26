<?php 
require 'function.php';

if (isset($_POST["submit"])){
        // Cek apakah data ditambahkan atau tidak
        if(tambah($_POST)> 0):
            echo "
            <script>
            alert('Data Berhasil dikirim');
            document.location.href = 'admin.php';
            </script>
            ";
        else:
            $feedback = "Data Gagal Dikirim";
            echo mysqli_error($db);
        endif;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <link href="css/blog.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <title>Create</title>
  </head>
  <body>
  
    <div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" id="files" name="picture" class="form-control" required style="display: none;"/>
          <button class="btn btn-outline-primary" name="picture"><label for="files" style="cursor: pointer;">Upload a Photo</label></button><br>
          <input type="text" name="title" placeholder="Add Blog Title..." class="form-control my-4 text-center bg-light" autocomplete="off" required />
          <input type="hidden" name="date" placeholder="Tanggal..." value="" required />
          <textarea name="content" id="" cols="30" rows="10" class="form-control bg-light my-4 textarea" placeholder="Add Content..." contenteditable="true" autocomplete="off" wrap="off" required></textarea>
          <button name= "submit" class="btn btn-success" onclick = "return confirm('Apakah anda yakin ingin Mengupload file?')">Add Post</button>
          <p>Anda wajib mengupload photo!!!</p>
        </form>
        <br>
        <a href="admin.php"><button class="btn btn-outline-primary my-5" onclick = "return confirm('Apakah anda ingin keluar? \n\nData yang anda tulis tadi anda akan hilang!!')">Kembali</button></a>
        <?php if (isset($_POST['submit'])): ?>
          <h4><?= $feedback ?></h4>
        <?php endif; ?>
        
        
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>