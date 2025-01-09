<?php
$server = "localhost";  
$username = "root";         
$password = "";         
$database = "dbbuku";   

// Membuat koneksi ke database
$koneksi = mysqli_connect($server, $username, $password, $database);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
