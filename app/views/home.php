<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Company Profile Sederhana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CompanyLogo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-4">Selamat Datang di Perusahaan Kami</h1>
    <p class="lead">Kami memberikan solusi terbaik untuk kebutuhan bisnis Anda.</p>
    <a href="#about" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- Carousel -->
<div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1200x400/?office,business" class="d-block w-100" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Komitmen pada Kualitas</h5>
        <p>Kami selalu mengutamakan kualitas dalam setiap layanan.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?team,work" class="d-block w-100" alt="slide2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tim Profesional</h5>
        <p>Didukung oleh tim yang berpengalaman di bidangnya.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?technology,innovation" class="d-block w-100" alt="slide3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Inovasi Berkelanjutan</h5>
        <p>Kami selalu berinovasi untuk Anda.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Cards (Services) -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Layanan Kami</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://source.unsplash.com/400x200/?consulting" class="card-img-top" alt="Konsultasi Bisnis">
          <div class="card-body">
            <h5 class="card-title">Konsultasi Bisnis</h5>
            <p class="card-text">Membantu Anda mengembangkan strategi bisnis yang efektif dan efisien.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://source.unsplash.com/400x200/?software,development" class="card-img-top" alt="Pengembangan Software">
          <div class="card-body">
            <h5 class="card-title">Pengembangan Software</h5>
            <p class="card-text">Solusi teknologi sesuai kebutuhan perusahaan Anda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://source.unsplash.com/400x200/?training,education" class="card-img-top" alt="Pelatihan & Workshop">
          <div class="card-body">
            <h5 class="card-title">Pelatihan & Workshop</h5>
            <p class="card-text">Meningkatkan kapasitas SDM melalui pelatihan profesional.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Accordion (About/FAQ) -->
<section id="about" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Tentang Kami</h2>
    <div class="accordion" id="aboutAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Visi & Misi
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
             data-bs-parent="#aboutAccordion">
          <div class="accordion-body">
            <strong>Visi:</strong> Menjadi perusahaan terdepan dalam solusi bisnis dan teknologi.<br>
            <strong>Misi:</strong> Memberikan layanan terbaik, inovatif, dan bernilai tambah bagi klien.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Keunggulan Kami
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
             data-bs-parent="#aboutAccordion">
          <div class="accordion-body">
            <ul>
              <li>Tim profesional dan berpengalaman</li>
              <li>Layanan pelanggan responsif</li>
              <li>Solusi inovatif dan terintegrasi</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            FAQ
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
             data-bs-parent="#aboutAccordion">
          <div class="accordion-body">
            <strong>Bagaimana cara menghubungi kami?</strong> <br>
            Anda dapat menghubungi kami melalui form kontak di bawah atau email resmi perusahaan.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container text-center">
    <p class="mb-1">&copy; <?= date('Y') ?> Perusahaan Anda. All rights reserved.</p>
    <small>Alamat: Jl. Contoh No.123, Jakarta | Email: info@perusahaan.com | Telp: 021-12345678</small>
  </div>
</footer>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>