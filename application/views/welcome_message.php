<?php 
$sumber = 'http://api.kawalcorona.com/positif';
$konten = file_get_contents($sumber);
$positif = json_decode($konten, true);

$sumbersembuh = 'http://api.kawalcorona.com/sembuh';
$dataSembuh = file_get_contents($sumbersembuh);
$sembuh = json_decode($dataSembuh, true);

$sumbermeninggal = 'http://api.kawalcorona.com/meninggal';
$dataMeninggal = file_get_contents($sumbermeninggal);
$meninggal = json_decode($dataMeninggal, true);

$sumberindonesia = 'http://api.kawalcorona.com/indonesia';
$dataIndonesia = file_get_contents($sumberindonesia);
$indonesia = json_decode($dataIndonesia, true);

$dataIndonesia = $indonesia[0];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pantau Corona | Covid 19 - Informasi Terkini Perkembangan Covid 19 di Indonesia</title>
        <meta name="description" content="Informasi Terkini Perkembangan Covid 19 di Indonesia" />
        <meta name="keywords" content="Informasi Terkini Perkembangan Covid 19 di Indonesia, Corona Virus, Data Corona, Data Covid 19" />
        <meta name="author" content="Khulafaur Rasyidin" />

        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico">

        <!--Bootstrap Css-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap.min.css" />

        <!-- Materialdesign icons Css -->
        <link href="<?= base_url(); ?>/assets/css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Mobirise icons Css -->
        <link href="<?= base_url(); ?>/assets/css/mobiriseicons.css" rel="stylesheet"> 

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/magnific-popup.css">

        <!-- Animate Css -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.min.css">

        <!-- OWL SLIDER -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.theme.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.transitions.css" />

        <!-- Custom style Css -->
        <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
        <link href="<?= base_url(); ?>/assets/css/color/default.css" rel="stylesheet" id="option-color">
    </head>

    <body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>

        <!-- Start Navbar -->
    	<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">

                <a class="navbar-brand pt-0 logo" href="#">
                    <!-- <img src="<?= base_url(); ?>/assets/images/logo.png" alt="" class="img-fluid logo-light"> -->
                    <!-- <img src="<?= base_url(); ?>/assets/images/logo-dark.png" alt="" class="img-fluid logo-dark"> -->
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Halaman Utama</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Lihat Data</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#client">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- START HOME -->
        <section class="section jarallax h-100vh" data-jarallax='{"speed": 0.2}' style="background-image: url('<?= base_url(); ?>/assets/images/header-bg.jpg');"  id="home">
            <div class="bg-overlay"></div>
            <div class="header-table">
                <div class="header-table-center">
                    <div class="container position-relative z-index">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center header-content mx-auto">
                                    <h4 class="text-white first-title mb-4">PUSAT INFORMASI COVID19</h4>
                                    <!-- <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="simple-text-rotate font-weight-bold">Kerri Deo.,A Graphic Designer.,A Photographer.</span></h1> -->
                                    <p class="text-white mx-auto header-desc mt-4">Data Corona Virus Global dan Indonesia.<br> (Live)</p>
                                    <div class="mt-4 pt-2">
                                        <!-- <a href="#services" class="btn btn-outline-custom btn-round">Download Cv</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="scroll_down">
                <a href="#services" class="scroll">
                    <i class="text-white"></i>
                </a>
            </div>
        </section>
        <!-- END HOME -->

        <!-- START ABOUT -->
        <!-- <section class="section" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img src="<?= base_url(); ?>/assets/images/about.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <h2><span class="font-weight-bold">About</span> Me</h2>
                            <h4 class="mt-4">Hello! <span class="text-custom font-weight-bold">I'M Kerri Deo.</span></h4>
                            <p class="text-muted mt-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                            <p class="text-muted mt-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <p class="text-muted mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <div>
                                <ul class="mb-0 about-social list-inline mt-4">
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END ABOUT -->

        <!-- START SERVICES -->

        
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Total <span class="font-weight-bold">Keseluruhan Data</span></h2>
                            <p class="text-muted mx-auto section-subtitle mt-3">Data akan terus diupdate secara realtime.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <div class="text-center services-boxes rounded p-4 mt-4">
                            <div>
                            <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50" alt="Positif">
                            </div>
                            <div class="mt-4">
                                <h5 class="mb-0">Total Positif</h5>
                                <div class="services-title-border"></div>
                                <p class="text-muted mt-3"><?= $positif['value']; ?> orang </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center services-boxes rounded p-4 mt-4">
                            <div class="services-boxes-icon">
                            <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50" alt="Positif">
                            </div>
                            <div class="mt-4">
                                <h5 class="mb-0">Total Sembuh</h5>
                                <div class="services-title-border"></div>
                                <p class="text-muted mt-3"><?= $sembuh['value']; ?> orang </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center services-boxes rounded p-4 mt-4">
                            <div class="services-boxes-icon">
                            <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50" alt="Positif">
                            </div>
                            <div class="mt-4">
                                <h5 class="mb-0">Meninggal</h5>
                                <div class="services-title-border"></div>
                                <p class="text-muted mt-3"><?= $meninggal['value']; ?> orang </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="text-center services-boxes rounded p-4 mt-4">
                            <div class="services-boxes-icon">
                            <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50" alt="Positif">
                            </div>
                            <div class="mt-4">
                                <h5 class="mb-0">Indonesia</h5>
                                <div class="services-title-border"></div>
                                    <p class="text-muted mt-3">Positif <?= $dataIndonesia['positif']; ?> Orang, Sembuh <?= $dataIndonesia['sembuh']; ?> Orang, Meninggal <?= $dataIndonesia['meninggal']; ?> Orang</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END SERVICES -->

        
        <!-- END CONTACT -->

        <!--START FOOTER-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="text-center text-white footer-alt">
                            <ul class="list-unstyled list-inline mb-3">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook text-muted"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin text-muted"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-pinterest text-muted"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter text-muted"></i></a></li>
                            </ul>
                            <p class="text-muted mb-0"> 2020 &copy; rasyid.in by Khulafaur Rasyidin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->

        <!-- Back To Top -->    
        <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>
      
        <!-- JAVASCRIPTS -->
        <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <!--EASING JS-->
        <script src="<?= base_url(); ?>/assets/js/jquery.easing.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/scrollspy.min.js"></script>
        <!--PORTFOLIO FILTER JS-->
        <script src="<?= base_url(); ?>/assets/js/isotope.js"></script>
        <!-- Magnific Popup Js -->
        <script src="<?= base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
        <!--TEXT ROTETE-->
        <script src="<?= base_url(); ?>/assets/js/jquery.simple-text-rotator.js"></script>
        <!-- CONTACT JS -->
        <script src="<?= base_url(); ?>/assets/js/contact.js"></script>
        <!-- OWL CAROUSEL -->
        <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
        <!--PARTICLES ANIMATE JS-->
        <script src="<?= base_url(); ?>/assets/js/particles.js"></script>  
        <script src="<?= base_url(); ?>/assets/js/particles.app.js"></script>      
        <!-- PARALLAX JS -->
        <script src="<?= base_url(); ?>/assets/js/parallax.js"></script> 
        <!--CUSTOM JS-->
        <script src="<?= base_url(); ?>/assets/js/custom.js"></script>
        <script>
            $(".simple-text-rotate").textrotator({
                animation: "fade",
                speed: 3500
            });
        </script>
    </body>
</html>
