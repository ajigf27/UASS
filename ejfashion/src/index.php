<?php
include('connect.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $size = $_POST['size'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO produk (nama, harga, size, stok) VALUES ('$nama', '$harga', '$size', '$stok')";
    if ($conn->query($sql) === TRUE) {
        $message = "Produk berhasil ditambahkan!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ Fashion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <style>
        body {
            font-family: 'Helvetica', sans-serif !important;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradien latar belakang */
            color: #fff; /* Warna teks */
            margin: 0;
            padding: 20px;
        }
        .navbar-custom {
            background-color: rgba(0, 123, 255, 0.8); /* Warna biru muda dengan transparansi */
        }
        .card-custom {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan shadow */
            border-radius: 10px; /* Tambahkan border radius */
            overflow: hidden; /* Sembunyikan overflow */
            background-color: rgba(255, 255, 255, 0.1); /* Transparansi latar belakang */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk card */
        }
        .card-custom:hover {
            transform: translateY(-10px); /* Efek hover untuk card */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Efek shadow saat hover */
        }
        .card-header-custom {
            background-color: rgba(0, 123, 255, 0.8); /* Warna biru muda dengan transparansi */
            color: white; /* Warna teks putih */
            padding: 15px; /* Tambahkan padding */
            font-size: 1.5rem; /* Ukuran font lebih besar */
            font-family: 'Helvetica', sans-serif !important; /* Ganti font ke Helvetica */
            font-weight: bold; /* Membuat teks tebal */
        }
        .card-body-custom {
            padding: 20px; /* Tambahkan padding */
            font-family: 'Helvetica', sans-serif !important; /* Ganti font ke Helvetica */
        }
        .custom-img {
            width: 100%; /* Atur lebar gambar sesuai kebutuhan */
            height: 400px; /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 20px; /* Membuat sudut gambar melengkung */
        }
        ul {
            list-style: none; /* Hilangkan bullet points */
            padding: 0;
            display: flex;
            justify-content: space-around;
            background-color: rgba(0, 123, 255, 0.8); /* Warna biru muda dengan transparansi */
            border-radius: 10px; /* Tambahkan border radius */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan shadow */
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk ul */
        }
        ul li {
            margin: 0 10px;
        }
        ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            transition: background-color 0.3s ease, color 0.3s ease; /* Transisi untuk link */
        }
        ul li a:hover {
            background-color: white;
            color: #007bff;
            border-radius: 5px; /* Tambahkan border radius pada hover */
        }
        .modal-header-custom {
            background-color: #007bff; /* Warna biru untuk header modal */
            color: white; /* Warna teks putih */
            border-top-left-radius: 10px; /* Sudut melengkung untuk header modal */
            border-top-right-radius: 10px; /* Sudut melengkung untuk header modal */
        }
        .modal-body-custom {
            background-color: #f8f9fa; /* Warna latar belakang untuk body modal */
            color: #000; /* Warna teks hitam */
            padding: 20px; /* Tambahkan padding */
            border-bottom-left-radius: 10px; /* Sudut melengkung untuk body modal */
            border-bottom-right-radius: 10px; /* Sudut melengkung untuk body modal */
        }
        .form-label {
            color: #000; /* Warna teks hitam untuk label form */
        }
        .modal-content {
            border-radius: 20px; /* Membuat sudut modal melengkung */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Tambahkan shadow */
            animation: fadeIn 0.5s ease-in-out; /* Animasi fade in */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transisi untuk tombol */
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05); /* Efek hover untuk tombol */
        }

          .table td, .table th {
            color: #000; /* Warna teks hitam untuk tabel */
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1>EJ Fashion</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container mt-5">
    <div class="card card-custom animate__animated animate__fadeInDown">
        <div class="card-header card-header-custom text-center">
            EJ Fashion
        </div>
        <div class="card-body card-body-custom">
            <?php if ($message): ?>
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            <button class="btn btn-primary mb-3 btn-custom" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus-circle"></i> Add Stock
            </button>
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Size</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query("SELECT * FROM produk");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='animate__animated animate__fadeInUp'>
                            <td>{$row['id']}</td>
                            <td>{$row['nama']}</td>
                            <td>Rp ".number_format($row['harga'], 0, ',', '.')."</td>
                            <td>{$row['size']}</td>
                            <td>{$row['stok']}</td>
                            <td>
                                <button class='btn btn-warning btn-sm editBtn' data-id='{$row['id']}' data-nama='{$row['nama']}' data-harga='{$row['harga']}' data-size='{$row['size']}' data-stok='{$row['stok']}'>
                                    <i class='fas fa-pencil-alt'></i> Edit
                                </button>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>
                                    <i class='fas fa-trash'></i> Hapus
                                </a>
                            </td>
                        </tr>";
                }
                ?> <!-- Dynamic data will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Entry Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-custom">
                <h5 class="modal-title" id="addModalLabel">Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-custom">
                <form id="addForm" method="POST" action="add.php">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="size" name="size" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom">Add</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Entry Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-custom">
                <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-custom">
                <form id="editForm" method="POST" action="edit.php">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="edit-nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="edit-harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="edit-size" name="size" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="edit-stok" name="stok" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom">Update</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/app.js"></script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

    // Handle edit button click
    $('.editBtn').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const harga = $(this).data('harga');
        const size = $(this).data('size');
        const stok = $(this).data('stok');

        $('#edit-id').val(id);
        $('#edit-nama').val(nama);
        $('#edit-harga').val(harga);
        $('#edit-size').val(size);
        $('#edit-stok').val(stok);

        $('#editModal').modal('show');
    });

    // Handle form submission for edit
    $('#editForm').on('submit', function(e) {
        e.preventDefault();

        const id = $('#edit-id').val();
        const nama = $('#edit-nama').val();
        const harga = $('#edit-harga').val();
        const size = $('#edit-size').val();
        const stok = $('#edit-stok').val();

        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: {
                id: id,
                nama: nama,
                harga: harga,
                size: size,
                stok: stok
            },
            success: function(response) {
                $('#editModal').modal('hide');
                location.reload(); // Reload the page to see the changes
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
</body>
</html>
