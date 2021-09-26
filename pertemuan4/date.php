<?php
    // format tertentu
    // echo date("l, d/M/Y");

    // UNIX Timestamp
    // echo time()

    // echo date("l, d/M/Y", time()+60*60*24*34);

    // mktime()
    // Membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam menit detik bulan tanggal tahun

    // echo date("l", mktime(0,0,0,12,22,2001));
    echo date("l", strtotime("22 December 2001"))
?>