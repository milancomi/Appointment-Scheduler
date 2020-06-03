<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>S-T-I-L-L</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="#hero">szr: STILL</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
           <a href="#hero" class="logo logoSize"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#hero">Home</a></li>
              <li><a href="#about">O Nama</a></li>
              <li><a href="#portfolio">Galerija</a></li>
              <li><a href="#pricing">Cene</a></li>
              <li><a href="#contact">Kontakt</a></li>

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 pt-5 mt-6"
        {{-- style="z-index: 20;position: absolute;" --}}

        >
            <h1>Frizerski salon</h1>

            <h1><b>- STILL -</b></h1>
            <h1 class="mt-2"><i>LOGO SLIKA i pozadina slika lokala</i></h1>
        </div>
          <video autoplay muted loop id="myVideo">
            <source src="assets/video/demo.mp4" type="video/mp4">
          </video>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>O Nama</h2>
          <p>Neki tekstt da smislimo, Neki tekstt da smislimo, Neki tekstt da smislimo ,Neki tekstt da smislimo, Neki tekstt da smislimo,Neki tekstt da smislimo</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                Neki tekstt da smislimoNeki tekstt da smislimoNeki tekstt da smislimoNeki tekstt da smislimoNeki tekstt da smislimoNeki tekstt da smislimo
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Neki tekstt da smislimo</li>
              <li><i class="ri-check-double-line"></i> Neki tekstt da smislimo Neki tekstt da smislimo</li>
              <li><i class="ri-check-double-line"></i> Neki tekstt da smislimo, Neki tekstt da smislimo</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Galerija</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Sve slike</li>
              <li data-filter=".filter-kikice">Kikice</li>
              <li data-filter=".filter-talasi">Talasi</li>
              <li data-filter=".filter-web">Fade</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-kikice">
            <img src="assets/img/jova/kikice-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>By:</h4>
              <p>Jovana Nikolić</p>
              <a href="assets/img/jova/kikice-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kikice">
            <img src="assets/img/jova/kikice-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>By:</h4>
                <p>Jovana Nikolić</p>
              <a href="assets/img/jova/kikice-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kikice">
            <img src="assets/img/jova/kikice-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>By:</h4>
                <p>Jovana Nikolić</p>
              <a href="assets/img/jova/kikice-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>
{{--
          <div class="col-lg-4 col-md-6 portfolio-item filter-kikice">
            <img src="assets/img/jova/kikice-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kikice">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div> --}}

          <div class="col-lg-4 col-md-6 portfolio-item filter-talasi">
            <img src="assets/img/jova/talasi-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>By:</h4>
                <p>Jovana Nikolić</p>
              <a href="assets/img/jova/talasi-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-talasi">
            <img src="assets/img/jova/talasi-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>By:</h4>
                <p>Jovana Nikolić</p>
              <a href="assets/img/jova/talasi-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div>
{{--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> {!! ($downloadIconSvg)!!}
            </a>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Cene</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Muško šišanje</h3>
              <h4><sup>din</sup>400<span></span></h4>


            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <h3>Žensko šišanje</h3>
              <h4><sup>din</sup>600<span></span></h4>
              <ul>
                <li>Šišanje</li>
                <li>Pranje kose</li>
                <li>Feniranje</li>
                <li class="na">OVO PRECRTANO BEZVEZE</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Šatiranje</h3>
              <h4><sup>din</sup>3000<span></span></h4>
              <ul>
                <li>Neki</li>
                <li>Opis</li>
                <li>Ili nazivi preparata</li>
                <li>koje koristite</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Na minut od centra grada. ( BOLJI TEKST)</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5704.578980242606!2d20.95331492566244!3d44.3656451444241!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ad6cbd6695369b6!2sFrizerski%20Salon%20Still!5e0!3m2!1ssr!2srs!4v1591136868893!5m2!1ssr!2srs" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>Lokacija:</h4>
                <p>Olga Milošević BB, Smederevska Palanka <br/> 11420</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p>neznam da l treba@example.com</p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>Telefon:</h4>
                <p>026/319-099</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>szr STILL</h3>
      <p>Ovde treba neki marketinski trik da se napise</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>szr STILL</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
