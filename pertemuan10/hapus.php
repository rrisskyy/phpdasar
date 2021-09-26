<?php
require 'functions.php';

$rank = $_GET["Rank"];

if (hapus($rank) > 0):
    echo "
        <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'blackclover.php';
        </script>
    ";
else:
    echo "
        <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'blackclover.php';
        </script>
        ";
endif;
?>