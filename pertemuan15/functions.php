<?php
// Connect ke Database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil semua data yang berada di tabel
function query($query){                             //  query("SELECT * FROM blackbulls"); (Contoh Pengambilan data dari tabel query)
    global $db;                                     //  Variable Scope  
    $result = mysqli_query($db, $query);            //  $result ibarat Lemari, (mysqli_query(Sambung ke database, lalu Lakukan $query))
    $rows = [];                                     //  $rows ibarat Keranjang kosong
    while ($row = mysqli_fetch_assoc($result)){     //  Baju yang diambil setiap looping nya
        $rows[] = $row;                             //  Setelah itu Masukkan Ke keranjang
    }
    return $rows;                                   //  Kembalikan Isi dari keranjangnya
}
//                                                  Maksud dibuatnya fungsi query adalah agar user tidak perlu membawa lemarinya


function tambah($data){                                                     //  Fungsi Tambah data (DATA DIDAPAT DARI POST) Dikirim Ke Function, Ditangkap oleh $data              
    global $db;                                                             //  Variable Scope
    $Picture = upload();                                                    //  Ambil data dari tiap elemen dalam form
    if (!$Picture) {
        return false;
    }
    $Name = htmlspecialchars($data["Name"]);                                //  Buat variabel yang isinya sama dengan index
    $Power = htmlspecialchars($data["Power"]);                              //  htmlspecialchars agar data yang dimasukkan tidak bisa menampilkan elemen html
    $Magic = htmlspecialchars($data["Magic"]);                              //
    $Grimoire = htmlspecialchars($data["Grimoire"]);                        //  
    $Position = htmlspecialchars($data["Position"]);                        //
    $query = "INSERT INTO `blackbulls`                                      
    (`Picture`, `Name`, `Power`, `Magic`, `Grimoire`, `Position`)           
    VALUES 
    ('$Picture', '$Name', '$Power', '$Magic', '$Grimoire', '$Position')
    ";                                                                       //  Masukkan datanya kedalam Lemari, (Petik disamping angka 1).
    mysqli_query($db, $query);                                               //  Sambung Ke database, lalu Lakukan $query

    return (mysqli_affected_rows($db));                                      //  Kembalikan, pesan 1 / -1
}

function upload(){
    $nameFile = $_FILES["Picture"]["name"];
    $sizeFile = $_FILES["Picture"]["size"];
    $errorFile = $_FILES["Picture"]["error"];
    $tmpFile = $_FILES["Picture"]["tmp_name"];
    
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $nameFile);              //  Pecah, dan batasi dengan delimiter
    $ekstensiGambar = strtolower(end($ekstensiGambar));     //  Ambil string akhir dari ekstensi gambar, lalu ubah menjadi huruf kecil
    if (in_array($ekstensiGambar, $ekstensiGambarValid) === False){   //  cari apakah ekstensi ada didalam array, in_array(jarum, jerami)
        echo " <script>
                alert('Yang anda upload bukan gambar!');
                </script>";
        return false;
    }
    if ($sizeFile > 2000000){                                         //  cek ukuran file
        echo " <script>
        alert('Ukuran melebihi batas!');
        </script>"; 
        return false;
    }

    $nameFileBaru = uniqid();
    $nameFileBaru .= '.';
    $nameFileBaru .= $ekstensiGambar;

    
    move_uploaded_file($tmpFile, 'img/' . $nameFileBaru);
    return $nameFileBaru;
}

// $rank = $_GET["Rank"];                                          //  Tangkap Rank dari URL (Dilakukan di hapus.php)

function hapus($rank){                                          //  Fungsi Hapus data (DATA DIDAPAT DARI POST)
    global $db;                                                 //  Variable Scope
    $query = "DELETE FROM blackbulls WHERE Rank = $rank";       //  Hapus data dari Lemari
    mysqli_query($db, $query);                                  //  Sambung ke Database lalu lakukan query              

    return (mysqli_affected_rows($db));                         //  Kembalikan, pesan 1 /  -1
}


function ubah ($data){                                                          //  Fungsi Ubah data
    global $db, $Rank;                                                          //  Variabel Scope
    $Rank = $data["Rank"];                                                      //  Buat Variabel yang menjadi primary key untuk membedakan satu sama lain
    $samePicture = htmlspecialchars($data["samePicture"]);

    if ($_FILES ['Picture']['error'] === 4){
        $Picture =  $samePicture;   
    } else {
        $Picture = upload();                                                    //
    }
    $Name = htmlspecialchars($data["Name"]);                                    //
    $Power = htmlspecialchars($data["Power"]);                                  //
    $Magic = htmlspecialchars($data["Magic"]);                                  //
    $Grimoire = htmlspecialchars($data["Grimoire"]);                            //
    $Position = htmlspecialchars($data["Position"]);                            //

    $query = "UPDATE blackbulls SET
                Picture = '$Picture',
                Name = '$Name',
                Power = $Power,
                Magic = '$Magic',
                Grimoire = '$Grimoire',
                Position = '$Position'
                WHERE Rank = $Rank
                ";                                                              //  Update isi data dari Lemari
    mysqli_query($db, $query);                                                  //  Sambungkan ke Database, lalu lakukan Query    

    return (mysqli_affected_rows($db));                                         //  Kembalikan 1 / -1
}




function cari($keyword){                              //  Contoh variabel baru bernama keyword
    $query = "SELECT * FROM blackbulls
             WHERE
             Name LIKE '%$keyword%' OR
             Power LIKE '%$keyword%' OR
             Magic LIKE '%$keyword%' OR
             Position LIKE '%$keyword%'
    ";                                                //  %$keyword, sama dari arah kanan, $keyword% kiri, %$keyword% kiri dan kanan
    return query($query);                             //  Kembalikan $query, lalu jalankan fungsi query
}

function register($data){
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);
    $email = $data["email"];
    $phoneNumber = $data["phonenumber"];

    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username telah digunakan')
        </script>";
        return false;
    } 

    if ($password !== $password2) {
        echo "<script>
            alert('Password Konfirmasi salah')
        </script>";
        return false;
    };

    // Enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO users VALUES ('', '$username', '$password', '$email', '$phoneNumber')");
    return (mysqli_affected_rows($db));   
};


























?>


