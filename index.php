<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>Tuladha</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo-tuladha.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +6281382779696 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">tuladhaapp@gmail.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook"  data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a class="twitter"  data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google"  data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin"  data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest"  data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.php"><img src= alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Courses <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Course Pages</h4>
                                                    <ul>
                                                        <li><a >Mathematics</a></li>
                                                        <li><a >Physics</a></li>
                                                        <li><a >Biology</a></li>
                                                        <li><a >Chemistry</a></li>
                                                        <li><a >Bahasa Indonesia</a></li>
                                                        <li><a >English</a></li>
                                                        <li><a >Programming</a></li>
                                                        <li><a >Medical</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="upload/advanced-algebra.jpg" alt="" class="img-responsive">
                                                            <div class="magnifier">
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a >Advanced Algebra</a></h5>
                                                        <small>Rp.100.000</small>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="page-contact.php">Contact</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Tuladha</p>
                    <small>Tuladha is the ideal choice for students aspiring to learn and achieve greater success for a bright future.</small>
                    <div class="btn-wrapper">
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="upload/siswa-sd.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>We are bringing new <mark>learning system</mark> to<br>
                            Surabaya. Learn new cool and fun stuff such as <br>
                            physics and chemsitry today</h2>

                            <p>Tuladha is a learning application with the most complete learning solution for all your learning difficulties. Content is available for various levels ranging from elementary, middle and high school in accordance with the national curriculum and specifically designed by the best and experienced tutor (Master Tutor). Starting from watching videos, practice exercises, private lessons, tryouts can all be accessed from your smartphone!</p>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>Custom Shortcodes</li>
                                        <li>Visual Page Builder</li>
                                        <li>Unlimited Shortcodes</li>
                                        <li>Responsive Theme</li>
                                        <li>Tons of Layouts</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Font Awesome Icons</li>
                                        <li>Pre-Defined Colors</li>
                                        <li>AJAX Transitions</li>
                                        <li>High Quality Support</li>
                                        <li>Unlimited Options</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
                                        <li>Shopping Layouts</li>
                                        <li>Pre-Defined Fonts</li>
                                        <li>Style Changers</li>
                                        <li>Footer Styles</li>
                                        <li>Header Styles</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a  class="btn btn-primary">Learn More About us</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent Courses</h3>
                    <p>Mata Pelajaran yang cocok untuk anda</p>
                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/advanced-algebra.jpg" alt="" class="img-responsive">
                                <div class="magnifier"></div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Mathematics</small>
                                    <a  title="">Basic Algebra</a>
                                </h4>

                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a ><i class="fa fa-user"></i> 21</a></li>
                                        <li><a ><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a >Rp.50.000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/copper-plating.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a  title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Chemistry</small>
                                    <a  title="">Faraday's Law</a>
                                </h4>

                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a ><i class="fa fa-user"></i> 41</a></li>
                                        <li><a ><i class="fa fa-clock-o"></i> 33 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a >Rp.100.000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/verbs.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a  title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>English</small>
                                    <a  title="">Verbs and Adverbs</a>
                                </h4>

                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a ><i class="fa fa-user"></i> 35</a></li>
                                        <li><a ><i class="fa fa-clock-o"></i> 1 Hrs.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a >Rp.100.000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/digestive-system.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a  title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Biology</small>
                                    <a  title="">Digestive System</a>
                                </h4>

                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a ><i class="fa fa-user"></i> 35</a></li>
                                        <li><a ><i class="fa fa-clock-o"></i> 45 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a >Rp.100.000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/legenda.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a  title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Bahasa Indonesia</small>
                                    <a  title="">Cerita Rakyat: Legenda</a>
                                </h4>

                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a ><i class="fa fa-user"></i> 21</a></li>
                                        <li><a ><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a >Rp.100.000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a  class="btn btn-primary">View All Courses</a>
                </div>
            </div><!-- end container -->
        </section>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                            <h3>Howdy, we are Tuladha, we have brought together the best quality services, courses, and tutorials for you!</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-computer-tool-for-education"></i>
                            <h4>Learning system</h4>
                            <p>All sections required for online training are included to Tuladha.</p>
                            <a  class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box m30">
                            <i class="flaticon-monitor-tablet-and-smartohone"></i>
                            <h4>Works on all mobile devices</h4>
                            <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                            <a  class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-download-business-statistics-symbol-of-a-graphic"></i>
                            <h4>Online Statistics</h4>
                            <p>We designed the design of all the sub-pages needed for the users.</p>
                            <a  class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <i class="flaticon-html5"></i> <i class="flaticon-css-3"></i>
                            <h4>Compatible HTML5 & CSS3</h4>
                            <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                            <a  class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box">
                            <i class="flaticon-html-coding"></i>
                            <h4>E-Learning Framework</h4>
                            <p>E-Learning is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                            <a  class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">1230</h4>
                            <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Happy Students</h3>

                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">331</h4>
                            <h3><i class="flaticon-online-course"></i> Course Done</h3>

                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">8901</h4>
                            <h3><i class="flaticon-coffee-cup"></i> Tutorials Learned</h3>

                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Testimonials</h3>

                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_01.png" alt="" class="img-circle"> Setioadji Rahmawan</strong></p>
                            <p>Benar-benar membantu dalam mengajarkan para penggunanya dan sangat cocok sebagai cahaya baru di dunia pendidikan.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_02.png" alt="" class="img-circle"> Alfathah Fariz</strong></p>
                            <p>The best banget aplikasinya, membantu sekali waktu aku SMA udah bener-bener gabisa mikir kemana lagi. Untungnya ada Tuladha jadi nilai SBM ku tinggi.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_03.png" alt="" class="img-circle"> Mayang Angelina</strong></p>
                            <p>Aku merasa terbantu karena saat SMA masih sulit memahami pelajaran. Untung dikenalin dengan website Tuladha ini. Akhirnya bisa keterima SNM deh.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent News</h3>

                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/senayan.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Jakarta rocked by massive demonstration on Senayan</a></h4>

                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a >30 September 2019</a></li>
                                    <li><a >by Rizal Rahadian</a></li>
                                    <li><a >14 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/juara.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">The most suitable web design & development tutorials of 2019</a></h4>

                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a >27 September 2019</a></li>
                                    <li><a >by Indra Hermawan</a></li>
                                    <li><a >11 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/surabaya.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Tuladha goes online in Bandung and Surabaya"</a></h4>

                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a >19 September 2019</a></li>
                                    <li><a >by Donny Kurnia R</a></li>
                                    <li><a >44 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section bgcolor1">
            <div class="container">
                <a >
                <div class="row callout">
                    <div class="col-md-4 text-center">
                        <h4><sup>Rp</sup>500.000</h4>
                        <h4>Start your awesome course today!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Limited time offer! Your profile will be added to our "Students" directory as well. </p>
                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->
        </section>

        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>You can opt out of our newsletters at any time.<br> See our <a >privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="email" class="form-control" placeholder="Enter email here.."required>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="images/payments.png" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a  class="readmore">Become a Tutor</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-widget">
                                <ul class="list-inline">
                                  <li><a >Matematika</a></li>
                                  <li><a >Bahasa Inggris</a></li>
                                  <li><a >Bahasa Indonesia</a></li>
                                  <li><a >Fisika</a></li>
                                  <li><a >Kimia</a></li>
                                  <li><a >Biologi</a></li>
                                  <li><a >Kedokteran</a></li>
                                  <li><a >Pemrograman</a></li>
                                  <li><a >Desain</a></li>
                                  <li><a >Statistik</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">
                                <ul>
                                    <li><a >Terms of Use</a></li>
                                    <li><a >Copyrights</a></li>
                                    <li><a >Create a Ticket</a></li>
                                    <li><a >Pricing & Plans</a></li>
                                    <li><a >Carrier</a></li>
                                    <li><a >Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a ><img src="images/logo-tuladha.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>
