<?php
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $db;
    $Picture = htmlspecialchars($data["Picture"]);
    $Name = htmlspecialchars($data["Name"]);
    $Power = htmlspecialchars($data["Power"]);
    $Magic = htmlspecialchars($data["Magic"]);
    $Grimoire = htmlspecialchars($data["Grimoire"]);
    $Position = htmlspecialchars($data["Position"]);

    $query = "INSERT INTO `blackbulls` 
    (`Picture`, `Name`, `Power`, `Magic`, `Grimoire`, `Position`) 
    VALUES 
    ('$Picture', '$Name', '$Power', '$Magic', '$Grimoire', '$Position')
    ";  
    mysqli_query($db, $query);

    return (mysqli_affected_rows($db));
}

function hapus($rank){
    global $db;
    $query = "DELETE FROM blackbulls WHERE Rank = $rank";
    mysqli_query($db, $query);

    return (mysqli_affected_rows($db));
}

?>


