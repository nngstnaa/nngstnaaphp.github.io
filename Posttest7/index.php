<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php'); // Jika tidak ada sesi, kembali ke halaman login
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POSTTEST2</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- boxicons icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css"/>
  </head>

  <body>
    <?php include 'header.php'; ?>

    <!-- hero section start -->
    <section class="hero" id="beranda">
      <img src="bg.jpg" alt="bg" class="hero-img" />
      <div class="hero-overlay"></div>
      <main class="content">
        <h1>Professional Laundry Service</h1>
        <p>Laundry Bersih, Wangi, Higienis dan Tepat Waktu</p>
        <button id="cta" class="cta" onclick="window.location.href = 'index2.php'">Order Now</button>
      </main>
    </section>
    <!-- hero section end -->

    <!-- section menu -->
    <section id="menu" class="menu">
      <h2>OUR SERVICE</h2>
      <h3>
        Kami Homie Laundry terletak di tengah Kota Samarinda, sehingga dekat
        dengan tempat kalian. Kami berdiri sejak 2019 dan menyediakan layanan
        antar jemput untuk mempermudah dan mempercepat pelayanan kami. Moto kami
        adalah membuat pakaian Anda bersih, Wangi, Higienis dan Tepat Waktu.
      </h3>
      <div class="row">
        <div class="menu-card">
          <img src="ft1.jpeg" alt="img1" class="menu-card-img" />
          <p class="menu-card-title">ANTAR JEMPUT</p>
          <p class="menu-card-text">
            Bersantailah, sementara kami mencuci pakaian Anda <br />
            Anda hanya perlu menghubungi kami dan kami yang akan mengerjakan
            semuanya untuk Anda. <br />
            Kami akan menjemput pakaian Anda, mencuci dan menyetrika dan
            mengantarkan pakaian Anda ke <br />
            tempat Anda dalam kondisi rapi, bersih dan harum.
          </p>
        </div>

        <div class="menu-card">
          <img src="ft2.jpeg" alt="img1" class="menu-card-img" />
          <p class="menu-card-title">DROP-OFF SERVICE</p>
          <p class="menu-card-text">
            Anda ingin mengantarkan ke toko kami, silahkan kami akan melayani
            dengan senang hati. <br />
            Apabila Anda berlokasi dekat dengan kami silahkan datang ke toko
            kami, <br />
            dan kami akan melayani dengan senang hati.
          </p>
        </div>

        <div class="menu-card">
          <img src="ft3.jpeg" alt="img1" class="menu-card-img" />
          <p class="menu-card-title">FULL SERVICE</p>
          <p class="menu-card-text">
            Chat kami > Kami Jemput > Kami Cuci > Kami Antar <br />
            Jangan ragu untuk menghubungi kami di nomor 0812 9991 3130, <br />
            kami akan segera membalas dan melayani Anda. Kami akan segera
            menjemput, <br />
            mencuci dan mengantarkan pakaian Anda kembali.
          </p>
        </div>
      </div>
    </section>
    <!-- section menu end -->

    <!-- section about me -->
    <section id="tentangsaya" class="tentangsaya">
      <h5>ABOUT ME</h5>
      <div class="row">
        <div class="image">
          <img
            src="foto copy.jpg"
            alt="Deskripsi Gambar"
            class="gambar-kecil"
          />
        </div>
        <div class="content">
          <p>Nama : Agustina</p>
          <p>NIM : 2209106086</p>
          <p>Usia : 19 Tahun</p>
          <p>Tanggal Lahir : 24 Agustus 2004</p>
        </div>
      </div>
    </section>
    <!-- section about me end -->

    <!-- section footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 by Homie Laundry</p>
      </div>
    </footer>
    <!-- section footer end -->

    <script src="script.js"></script>
  </body>
</html>
