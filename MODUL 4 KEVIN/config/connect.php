<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbHost = 'localhost';
$dbUser = 'root';
$dbName = 'modul4';
$dbPass = '';

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$conn){
    die("Connection Error". mysqli_connect_error());
}
// 
 
?>