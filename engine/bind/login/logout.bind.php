<?php
session_start(); // memulai session

// menghapus semua data session
session_unset(); 

// menghancurkan semua data session
session_destroy(); 

// redirect ke halaman login atau halaman lainnya
header("HOMEBASE: login.bind.php"); 
exit(); // keluar dari script
?>
