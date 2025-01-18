<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_ej";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
