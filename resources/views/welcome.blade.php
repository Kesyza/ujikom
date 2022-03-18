<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRYOUT SMA SEDERAJAT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{asset("user/assets/img/favicon.png")}} rel="icon">
  <link href={{asset("user/assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href={{asset("user/https://fonts.googleapis.com")}}>
  <link rel="preconnect" href={{asset("user/https://fonts.gstatic.com")}} crossorigin>
  <link href={{asset("user/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap")}} rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("user/assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("user/assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("user/assets/vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{asset("user/assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("user/assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href={{asset("user/assets/css/variables.css")}} rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href={{asset("user/assets/css/main.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>TRYOUT<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#materi">Lihat Materi</a></li>
          <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown megamenu"><a href="{{ route('login') }}"><span>Login Admin</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="{{ route('login') }}">Login Sebagai Admin</a>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="tryout">Mulai TRYOUT</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src={{asset("user/assets/img/team/t.png")}} class="img-fluid animated">
      <h2>Selamat Datang di <span>TRYOUT.</span></h2>
      <p>.</p>
      <div class="d-flex">
        <a href="tryout" class="btn-get-started scrollto">Mulai TRYOUT</a>
        <a href="#materi" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
      </div>
    </div>
  </section>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Services Section ======= -->
  <section id="materi" class="materi">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Materi Pembelajaran</h2>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src={{asset("user/assets/img/bhs-indonesia.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="https://www.youtube.com/watch?v=yXlCMWY-OC8&t=1s" class="stretched-link">
                <h3>Bahasa Indonesia</h3>
              </a>
              <p>Materi pembelajaran.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src={{asset("user/assets/img/english.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="https://www.youtube.com/watch?v=0Y9MPiieXPQ" class="stretched-link">
                <h3>Bahasa Inggris</h3>
              </a>
              <p>Materi pembelajaran.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src={{asset("user/assets/img/mat.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="https://www.youtube.com/watch?v=YYxFnK6vnTc" class="stretched-link">
                <h3>Matematika</h3>
              </a>
              <p>Materi pembelajaran.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src={{asset("user/assets/img/5.png")}} class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="https://www.youtube.com/watch?v=04Wxp8bv5NU" class="stretched-link">
                <h3>Ilmu Pengetahuan Alam</h3>
              </a>
              <p>Materi pembelajaran.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= About Section ======= -->
  <section id="tentang" class="tentang">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tentang</h2>
        <p>Website ini dibuat untuk memudahkan para siswa termasuk dijenjang SMA sederajat dalam persiapan menghadapi TRYOUT.</p>
      </div>

      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6">
          <div class="about-img">
            <img src={{asset("user/assets/img/faq.jpg")}} class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="pt-0 pt-lg-4">Kelebihan Website ini:</h3>

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Bisa diakses oleh semua orang</h4>
              </div>
              <p>Selain untuk melatih kemampuan akademik siswa website ini bisa diakses oleh siapa saja.</p>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Tidak perlu daftar akun</h4>
              </div>
              <p>Website ini dibuat sedemikian rupa supaya pengguna tidak perlu melalui daftar akun yang ribet.</p>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Dapat pembelajaran gratis</h4>
              </div>
              <p>Selain melatih nilai akademik, website ini juga menyediakan sebuah materi pembelajaran dalam bentuk video yang bisa dilihat oleh para pengguna.</p>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Gratis tanpa dipungut biaya</h4>
              </div>
              <p>Pokoknya mah gratis we.</p>

            </div><!-- End Tab 1 Content -->

          </div>

        </div>

      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Team</h2>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src={{asset("user/assets/img/team/team-1.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href="https://www.instagram.com/dinaamel_04/"><i class="bi bi-instagram"></i></a>
              </div>
              <h4>Dina Amelia</h4>
              <span>Front-end Developer</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src={{asset("user/assets/img/team/team-2.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href="https://www.instagram.com/_ksyzaa15/"><i class="bi bi-instagram"></i></a>
              </div>
              <h4>Kesyza Andriana Hartuti</h4>
              <span>Back-end Developer</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
          <div class="team-member">
            <div class="member-img">
              <img src={{asset("user/assets/img/team/team-3.jpg")}} class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href="https://www.instagram.com/__fanira/"><i class="bi bi-instagram"></i></a>
              </div>
              <h4>Fani Ramadhanty</h4>
              <span>Front-end Developer</span>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Team Section -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src={{asset("user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("user/assets/vendor/aos/aos.js")}}></script>
  <script src={{asset("user/assets/vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{asset("user/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  <script src={{asset("user/assets/vendor/swiper/swiper-bundle.min.js")}}></script>
  <script src={{asset("user/assets/vendor/php-email-form/validate.js")}}></script>

  <!-- Template Main JS File -->
  <script src={{asset("user/assets/js/main.js")}}></script>

</body>

</html>