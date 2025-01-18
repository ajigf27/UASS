<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $size = $_POST['size'];
    $stok = $_POST['stok'];

    // Verifikasi bahwa ID ada di database
    $check_sql = "SELECT * FROM produk WHERE id='$id'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // Jika ID ditemukan, update data
        $sql = "UPDATE produk SET nama='$nama', harga='$harga', size='$size', stok='$stok' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman utama setelah update berhasil
            header("Location: index.php?message=Produk berhasil diupdate!");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Jika ID tidak ditemukan, berikan pesan kesalahan
        echo "Error: Produk dengan ID tersebut tidak ditemukan.";
    }
}
?>