<?php
// pemanggilan sederhana
$nama = "Farwis Ilmi";
$home = "NASUTION";
$jurusan = "Sistem Informasi";
$email = "farwisilmi23@gmail.com";
$telpon = "085695410877";

// di image slider
$carousel1 = "Bola Basket";
$carousel2 = "Sepak Bola";
$carousel3 = "Bola Voli";

//di konten card
$card1 = "HTML";
$card2 = "PHP";

//di bagian footer
$place1 = "Toko Nasution";
$place2 = "Insitut Bisnis dan Informatika Kesatuan";
$place3 = "Nurul Fikri Computer";

$copyright = "&copyWIZ "
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tugas PHP - Farwis</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" />
  </head>
  <body>
    <!-- navbar dan dropdown -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><b><?php echo $home ?></b></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hubungkan</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Aksi 1</a></li>
                <li><a class="dropdown-item" href="#">Aksi 2</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Keluar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Updating</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- end navbar dan dropdown -->

    <!-- Profil Header -->
    <div class="row p-5">
      <div class="col-md-12 text-center bg-info">
        <h2>Welcome, <?php echo $nama ?></h2>       
        <img
          alt="Bootstrap Image Preview"
          src="https://static.vecteezy.com/system/resources/thumbnails/010/260/479/small/default-avatar-profile-icon-of-social-media-user-in-clipart-style-vector.jpg"
          class="rounded-circle h-10 w-10" />

        <p>
          Hello, perkenalkan nama saya <?php echo $nama ?>, saya seorang
          <strong>mahasiswa dari bogor, jurusan <?= $jurusan ?></strong>. Disini saya sedang
          belajar tentang bahasa pemograman PHP. Tugas kali ini untuk membuat desain web
          sederhana dengan memanggil variabel PHP di dalam tampilan HTML.
          <em
            >Bisa menghubungi saya via email maupun telpon yang tertera.</em
          >
          <ul><b>Email: <?php echo $email ?></b></ul>
          <ul><b>Phone: <?php echo $telpon ?></b></ul>
          <br /><small>Atau, Klik tombol dibawah ini untuk mengetahui lebih lanjut.</small>
        </p>
        <a class="btn btn-success btn-lg p-6" href="https://www.instagram.com/farwiss_nst" role="button">Instagram</a>
        <a class="btn btn-success btn-lg" href="https://github.com/farwiss" role="button">Github</a>
        <a class="btn btn-success btn-lg" href="https://www.linkedin.com/in/farwisilmi/" role="button">Linkedin</a>
      </div>
    </div>
    <!-- end profil header -->

    <!-- carousel atau image slider -->
    <div id="carouselExampleCaptions" class="carousel slide pb-5 m-auto">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://source.unsplash.com/random/1980x400?basketball"
            class="d-flex w-auto"
            alt="basketball" />
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $carousel1 ?></h5>
            <p>
              Diciptakan pada tahun 1981 di Springfield, Massachusetts, Amerika Serikat.<br />
              &star;James Naismith&star;
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/random/1980x400?soccer"
            class="d-flex w-auto"
            alt="football" />
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $carousel2 ?></h5>
            <p>
              Berkembang di Inggris pada abad ke-19. Pertauran formal pertama pada tahun 1863
              sebagai sepakbola modern <br />
              &star;The Footbal Association&star;
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/random/1980x400?volleyball"
            class="d-flex w-auto"
            alt="volleyball" />
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $carousel3 ?></h5>
            <p>
              Diciptakan pada tahun 1895 di Holyoke, Massachusetts, Amerika Serikat. <br />
              &star;William G. Morgan&star;
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="visually">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
    <!-- end carousel -->

    <!-- card  -->
    <div class="row pb-5 m-auto">
      <div class="col-md-6">
        <div class="card bg-body-tertiary text-center">
          <h2><?php echo $card1 ?></h2>
          <p>
          adalah bahasa markup yang digunakan untuk membuat halaman web. Singkatnya, HTML adalah fondasi dari setiap halaman web di internet. Dengan menggunakan tag dan atribut, HTML memungkinkan pengembang untuk menentukan struktur dan konten dari sebuah halaman web. Tag HTML digunakan untuk menandai elemen-elemen seperti judul, paragraf, gambar, tautan, formulir, dan banyak lagi. Browser web membaca kode HTML dan menampilkan halaman web sesuai dengan struktur dan kontennya. HTML sering digabungkan dengan CSS dan JavaScript untuk menghasilkan halaman web yang lebih interaktif dan menarik secara visual. Dengan demikian, HTML merupakan dasar yang penting dalam pembuatan dan penampilan halaman web di internet.
          </p>
          <p>
            <a class="btn btn-primary btn-large" href="#">Selengkapnya</a>
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card bg-body-tertiary text-center">
          <h2><?php echo $card2 ?></h2>
          <p>
            adalah bahasa pemrograman skrip yang sering digunakan untuk pengembangan aplikasi web. Singkatnya, PHP memungkinkan pengembang untuk membuat situs web interaktif dan dinamis dengan mudah. Ini adalah bahasa pemrograman server-side, yang berarti kode PHP dieksekusi di sisi server sebelum halaman web dikirimkan ke browser pengguna. PHP sering digunakan untuk memproses formulir, mengakses basis data, menghasilkan konten dinamis, dan melakukan berbagai tugas lainnya yang diperlukan untuk membuat situs web yang responsif dan fungsional. Dengan sintaksis yang mudah dipahami dan kemampuan integrasi HTML yang kuat, PHP telah menjadi salah satu bahasa pemrograman web yang paling populer di dunia.
          </p>
          <p>
            <a class="btn btn-primary btn-large" href="#">Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
    <!-- end jumbotron -->

    <!-- address -->
    <div class="row pb-1 m-auto">
      <div class="col-md-4">
        <address>
          <strong><?= $place1?></strong><br />
          Jl. Pangeran Asogiri No.25 Rt.01/02<br />
          Bogor Utara, Kota Bogor<br />
          <abbr title="Phone">&phone;</abbr> +62-813-1524-5920
        </address>
      </div>
      <div class="col-md-4">
        <address>
          <strong><?= $place2?></strong><br />
          Jl. Rangga Gading No.01, Gudang<br />
          Bogor Tengah, Kota Bogor<br />
          <abbr title="Phone">&phone;</abbr> +62-857-1111-1210
        </address>
      </div>
      <div class="col-md-4">
        <address>
          <strong><?= $place3?></strong><br />
          Jl. Lenteng Agung Raya No. 20-21,<br />
          Jakarta Selatan 12640<br />
          <abbr title="Phone">&phone;</abbr> +62-21-7874223
        </address>
      </div>
    </div>
    <!-- end address -->

    <!-- footer -->
    <div class="row text-center">
      <div class="col-md-4">
        <div class="mt-5">
          <h1><?php echo $copyright ?><small>Bootstrap</small></h1>
        </div>
      </div>
      <div class="col-md-8">
        <blockquote class="blockquote mt-5">
          <p class="blockquote">
            "Sesungguhnya, hanya orang-orang yang bersabarlah yang dicukupkan pahala mereka tanpa
            batas."
          </p>
          <p class="blockquote-footer">Q.S <cite>Az-Zumar:10</cite></p>
        </blockquote>
      </div>
    </div>
    <!-- end footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
  </body>
</html>
