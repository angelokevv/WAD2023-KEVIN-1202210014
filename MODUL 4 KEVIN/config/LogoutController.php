<?php 

// (1) Hapus cookie dengan key id 
setcookie("id", "", time() - 3600,"MODUL%204%20KEVIN/views/home.php");

// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>