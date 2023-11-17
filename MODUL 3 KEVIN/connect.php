<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $Host = "localhost";
    $Username = "root";
    $Password = "";
    $dbname = "modul3_wad";

    $conn = mysqli_connect($Host, $Username, $Password, $dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if ($conn) {
        echo "Connection success";
    }
    else {
        echo "Database tidak connect";
    }
// 
?>