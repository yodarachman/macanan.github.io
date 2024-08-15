<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link" href="/sejarah">Sejarah Desa</a></li>
              <li><a class="nav-link" href="/sotk">Organisasi Desa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/datadesa">Data Desa</a></li>
          <li class="dropdown"><a href="/informasi"><span>INFORMASI LAYANAN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ktp">Pembuatan KTP</a></li>
              <li><a href="/kk">Pembuatan KK</a></li>
              <li><a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
              <li><a href="/aktekematian">Pembuatan Akte Kematian</a></li>
              <li><a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
              <li><a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/event">EVENT</a></li>
          <li><a class="nav-link scrollto" href="/berita">BERITA</a></li>
          <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
          <li><a class="nav-link scrollto" href="/umkm">UMKM SEKITAR</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
    <!-- Konten Hero Section bisa ditambahkan di sini jika diperlukan -->
  </section><!-- End Hero -->

  <main>
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Detail Berita</h2>
          <br/>
          <div class="member-img">
            <img src="{{ asset('image/' . $news->image) }}" alt="Gambar Berita" class="img-fluid">
          </div>
          <br>
          <div align="left">
            {!! $news->description !!}
          </div>
             
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Desa Macanan</h3>
              <p>
                Kec. Kebakkramat <br>
                Kab. Karanganyar<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/galeri">Galeri</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Desa</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/kk">Pembuatan KTP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/ktp">Pembuatan Kartu Keluarga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/aktekematian">Pembuatan Akte Kematian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Desa Macanan</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>