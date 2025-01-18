<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EJ Fashion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            margin-bottom: 20px; /* Tambahkan margin bawah */
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
            color: #fff; /* Warna teks putih */
        }
        .custom-img {
            width: 100%; /* Atur lebar gambar sesuai kebutuhan */
            height: 300px; /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 10px 10px 0 0; /* Membuat sudut gambar melengkung di atas */
            transition: transform 0.3s ease; /* Transisi untuk gambar */
        }
        .card-custom:hover .custom-img {
            transform: scale(1.05); /* Efek zoom pada gambar saat hover */
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
        .about-card {
            margin-top: 20px;
        }
        .about-card .card-header {
            background-color: rgba(0, 123, 255, 0.8); /* Warna biru muda dengan transparansi */
            color: white; /* Warna teks putih */
            font-size: 2rem; /* Ukuran font lebih besar */
            font-weight: bold; /* Membuat teks tebal */
            text-align: center; /* Teks rata tengah */
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
    <div class="card about-card card-custom animate__animated animate__fadeInDown">
        <div class="card-header">
            About Us
        </div>
        <div class="card-body card-body-custom">
            <p class="about-text">
                <strong>EJ Fashion</strong> adalah perusahaan fashion terkemuka yang mengkhususkan diri pada sepatu, pakaian, dan aksesoris berkualitas tinggi. Misi kami adalah menyediakan item fesyen yang bergaya dan nyaman yang memenuhi beragam kebutuhan pelanggan kami. Dengan komitmen terhadap keunggulan dan inovasi, kami berusaha untuk menetapkan tren baru dan mendefinisikan kembali standar mode. Bergabunglah dengan kami dalam perjalanan kami untuk mengubah dunia model dan gaya hidup.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/shoes.jpg" class="card-img-top custom-img" alt="Shoes 1">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">Aerostreet x Doraemon</h5>
                    <p class="card-text">Sepatu Limited Edition Kolaborasi antara Aerostreet x Doraemon.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/aero.webp" class="card-img-top custom-img" alt="Shoes 2">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">Aerostreet x Looney Tunes</h5>
                    <p class="card-text">T-Shirt Kolaborasi antara Aerostreet x Looney Tunes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/shoes2.avif" class="card-img-top custom-img" alt="Clothes 1">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">New Ballance X Liverpool</h5>
                    <p class="card-text">Sepatu Limited Edition antara New Ballance X Juergen Klopp X Liverpool.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/joker.jpg" class="card-img-top custom-img" alt="Clothes 2">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">Aerostreet X Joker</h5>
                    <p class="card-text">Sepatu Kolaborasi Terbaru Antara Aerostreet X Joker.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/joker2.webp" class="card-img-top custom-img" alt="Pants 1">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">Aerostreet X Joker</h5>
                    <p class="card-text">T-Shirt Terbaru Dari Aerostreet X Joker.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom animate__animated animate__fadeInUp">
                <img src="images/jeans.jpg" class="card-img-top custom-img" alt="Pants 2">
                <div class="card-body card-body-custom">
                    <h5 class="card-title">Jeans</h5>
                    <p class="card-text">Jeans Keluaran Terbaru Dari Aerostreet Dengan Bahan Premium.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>