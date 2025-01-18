<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $size = $_POST['size'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO produk (nama, harga, size, stok) VALUES ('$nama', '$harga', '$size', '$stok')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=Produk berhasil ditambahkan!");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>