<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Logis Bootstrap Template - Gudang</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href=" https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>EXPEDISI A6</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="barang.php">Barang</a></li>
            <li><a href="gudang.php">Gudang</a></li>
            <li><a href="Kurir.php">Kurir</a></li>
            <li><a href="pengirim.php">Pengirim</a></li>
            <li><a href="penerima.php">Penerima</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/gudang.jpeg')">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Kurir</h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Kurir</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->
      <h1></h1>

      <table style="width:80%">
        <tr>
          <th>NO</th>
          <form action="proses.php" method="get">
            
          <th>ID Kurir</th>
          <th>Nama Kurir</th>
          <th>no HP Kurir</th>
          <th>ID Gudang</th>
          <th>Nama Gudang</th>
          <th>Action</th>
        </tr>

        <?php
        require 'connectionkurir.php';
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_kurir k JOIN tbl_gudang g ON k.id_gudang=g.id_gudang")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_kurir'] . "</td>";
          echo "<td>" . $data['nama_kurir'] . "</td>";
          echo "<td>" . $data['noHp_kurir'] . "</td>";
          echo "<td>" . $data['id_gudang'] . "</td>";
          echo "<td>" . $data['nama_gudang'] . "</td>";
          echo "<td>
            <a href='editkurir.php?id_kurir=$data[id_kurir]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
            <a href='deletekurir.php?id_kurir=$data[id_kurir] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
          echo "</tr>";
          $no++;
        }
        ?>


      </table>
      <br>
      <a href='createkurir.php' class='btn btn-primary btn-lg' style='font-weight: 600;'>Tambah</a>
      <h1> </h1>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>EXPEDISI A6</span>
            </a>
            <p>Expedisi A6 merupakan expedisi dari kelompok 6 yang mengusung kecepatan saat mengirim barang anda</p>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Barang</a></li>
              <li><a href="#">Gudang</a></li>
              <li><a href="#">Kurir</a></li>
              <li><a href="#">Pengirim</a></li>
              <li><a href="#">Penerima</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>EXPEDISI</h4>
            <ul>
              <li><a href="#">Barang</a></li>
              <li><a href="#">Gudang</a></li>
              <li><a href="#">Kurirt</a></li>
              <li><a href="#">Penerima</a></li>
              <li><a href="#">Pengirim</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              KELOMPOK 6 <br />
              Semarang, Jawa Tengah<br />
              Indonesia <br /><br />
              <strong>Phone:</strong> +1 5589 55488 55<br />
              <strong>Email:</strong> kelompok6@gmail.com<br />
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
