<?php
include('connect.php');

$id = $_GET['id'];

// Hapus data dari tabel
$sql = "DELETE FROM produk WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    // Perbarui nilai auto-increment berdasarkan ID terbesar yang ada
    $conn->query("SET @count = 0");
    $conn->query("UPDATE produk SET id = @count:= @count + 1");

    // Dapatkan nilai auto-increment yang baru
    $result = $conn->query("SELECT MAX(id) + 1 AS next_id FROM produk");
    $row = $result->fetch_assoc();
    $next_id = $row['next_id'] ? $row['next_id'] : 1;

    // Atur ulang nilai auto-increment
    $conn->query("ALTER TABLE produk AUTO_INCREMENT = $next_id");

    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>