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



function tambah($data){                                                     //  Fungsi Tambah data (DATA DIDAPAT DARI POST) Dikirim Ke Function, Ditangkap oleh $data              
    global $db;                                                             //  Variable Scope
    $Picture = htmlspecialchars($data["Picture"]);                          //  Ambil data dari tiap elemen dalam form
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


// $rank = $_GET["Rank"];                                          //  Tangkap Rank dari URL (Dilakukan di hapus.php)

function hapus($rank){                                          //  Fungsi Hapus data (DATA DIDAPAT DARI POST)
    global $db;                                                 //  Variable Scope
    $query = "DELETE FROM blackbulls WHERE Rank = $rank";       //  Hapus data dari Lemari
    mysqli_query($db, $query);                                  //  Sambung ke Database lalu lakukan query              

    return (mysqli_affected_rows($db));                         //  Kembalikan, pesan 1 /  -1
}


function ubah ($data){                                                          //  Fungsi Ubah data
    global $db;                                                          //  Variabel Scope
    $Rank = $data["Rank"];                                                      //  Buat Variabel yang menjadi primary key untuk membedakan satu sama lain
    $Picture = htmlspecialchars($data["Picture"]);                              //
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
?>


