<!doctype html>
<html lang="en">

<head>
  <title>Tuladha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <?php
  session_start();
  if(! isset($_SESSION['username'])){
  header("location:login.php");
};
  ?>

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3 ">
            <div class="site-logo">
              <a href="index.html">Tuladha</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#"
                class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                  class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="service.html" class="nav-link">Layanan</a></li>
                <li><a href="contact.html" class="nav-link">Kontak</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>

    </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url('images/university.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block">Hallo <?php echo $_SESSION['username'];?> <br>Belajar mudah dengan Tuladha</span>
              <h1 class="mb-2">Tuladha walks with you through your education</h1>

              <div class="d-flex media-38289 justify-content-around mb-5">
              </div>
              <p><a href="#" class="btn btn-primary text-white px-4 py-3">Pelajari lebih lanjut</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>






  </div>
  </div>
  </div>
  </form>

  <div class="site-section">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-lg-6">
          <div class="h-100 p-5 bg-black">
            <div class="row">
              <div class="col-md-6 text-center mb-4">
                <div class="service-38201">
                  <span class="flaticon-atom"></span>
                  <h3>Fisika</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6 text-center mb-4">
                <div class="service-38201">
                  <span class="flaticon-calculator"></span>
                  <h3>Matematika</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6 text-center mb-4">
                <div class="service-38201">
                  <span class="flaticon-science"></span>
                  <h3>Kimia</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6 text-center mb-4">
                <div class="service-38201">
                  <span class="flaticon-dna"></span>
                  <h3>Biologi</h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 ml-auto">
          <h3 class="heading-29201">Tentang Kami</h3>

          <p class="mb-5">Tuladha: Belajar di mana saja, kapan saja</p>

          <div class="service-39290 d-flex align-items-start mb-5">
            <div class="media-icon mr-4">
              <span class="flaticon-house-1"></span>
            </div>
            <div class="text">
              <h3>Misi</h3>
              <p>Menuntaskan permasalahan anak putus sekolah di Indonesia</p>
            </div>
          </div>

          <div class="service-39290 d-flex align-items-start mb-5">
            <div class="media-icon  mr-4">
              <span class="flaticon-calculator"></span>
            </div>
            <div class="text">
              <h3>Visi</h3>
              <p>Merubah sistem pembelajaran di Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-black block-14">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center text-white">Matkul Paling Diminati</h3>

          <p class="mb-5 text-white">Berdasarkan permintaan pengguna kami</p>
        </div>
      </div>





      <div class="site-section bg-light">
        <div class="container">



          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                <a href="single.html">
                  <img src="images/mathematics.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-entry-1-contents">

                  <h2><a href="#">Matematika</a></h2>
                  <span class="meta d-inline-block mb-3">Rp.250.000 <span class="mx-2">oleh</span> <a
                      href="#">Suryadhara</a></span>
                  <p>Kalkulus</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                <a href="single.html">
                  <img src="images/chemistry.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-entry-1-contents">

                  <h2><a href="#">Kimia</a></h2>
                  <span class="meta d-inline-block mb-3">Rp.200.000 <span class="mx-2">oleh</span>
                  <a href="#">Jepp Besoz</a></span>
                  <p>Sifat Koligatif</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                <a href="single.html">
                  <img src="images/physics.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-entry-1-contents">

                  <h2><a href="#">Fisika</a></h2>
                  <span class="meta d-inline-block mb-3">Rp.300.000 <span class="mx-2">oleh</span> <a
                      href="#">Ahmad Jepri</a></span>
                  <p>Relativitas</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>



      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-white h5 mb-3">Berlangganan</h3>
              <form action="" class="d-flex">
                <input type="text" class="form-control mr-3" placeholder="Masukkan email anda">
                <input type="submit" class="btn btn-primary text-white" value="Kirim">
              </form>
            </div>
            <div class="col-md-3 ml-auto">
              <h3 class="text-white h5 mb-3">Berlangganan</h3>
              <ul class="list-unstyled menu-arrow">
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privasi</a></li>
                <li><a href="#">Hubungi Kami</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3 class="text-white h5 mb-3">Tentang</h3>
              <p>Tuladha: Belajar dimana saja, kapan saja</p>
            </div>
          </div>
          <!-- <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            </p>
            </div>
        </div>
      </div> -->
      </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>