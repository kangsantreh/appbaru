<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Buat koneksi
$connection = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}
?>