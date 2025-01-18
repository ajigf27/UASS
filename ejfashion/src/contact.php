<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EJ Fashion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
        .showcase {
            text-align: center;
            padding: 100px 20px;
            background: rgba(0, 123, 255, 0.8); /* Warna biru muda dengan transparansi */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk showcase */
        }
        .showcase:hover {
            transform: translateY(-10px); /* Efek hover untuk showcase */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Efek shadow saat hover */
        }
        .form-container {
            background: rgba(255, 255, 255, 0.1); /* Transparansi latar belakang */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk form container */
        }
        .form-container:hover {
            transform: translateY(-10px); /* Efek hover untuk form container */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Efek shadow saat hover */
        }
        .form-label {
            color: #000; /* Warna teks hitam untuk label form */
        }
        .form-control {
            border-radius: 5px; /* Tambahkan border radius */
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
        .modal-content {
            color: #000; /* Warna teks hitam untuk modal */
        }
        .form-label {
            color: #fff; /* Warna teks putih untuk label */
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

<section class="showcase">
    <div class="container">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us using the form below.</p>
    </div>
</section>

<div class="container mt-5">
    <div class="form-container animate__animated animate__fadeInUp">
        <form id="contactForm" method="POST" action="send_contact.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">Send Message</button>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Terima kasih, pesan Anda telah terkirim.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form default

    // Simulasi pengiriman form
    setTimeout(function() {
        $('#thankYouModal').modal('show'); // Tampilkan modal pesan terima kasih
        document.getElementById('contactForm').reset(); // Reset form
    }, 500); // Simulasi waktu tunggu pengiriman form
});
</script>
</body>
</html>