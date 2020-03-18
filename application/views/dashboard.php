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

$sumberglobal = 'https://api.kawalcorona.com/';
$dataGlobal = file_get_contents($sumberglobal);
$global = json_decode($dataGlobal, true);
$totalData = count($global);




$sumberindonesia = 'http://api.kawalcorona.com/indonesia';
$dataIndonesia = file_get_contents($sumberindonesia);
$indonesia = json_decode($dataIndonesia, true);

$dataIndonesia = $indonesia[0];

?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160822225-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160822225-1');
</script>

    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pantau Corona | Covid 19 - Informasi Terkini Perkembangan Covid 19 di Indonesia</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico">
    <meta name="description" content="Informasi Terkini Perkembangan Covid 19 di Indonesia" />
    <meta name="keywords" content="Informasi Terkini Perkembangan Covid 19 di Indonesia, Corona Virus, Data Corona, Data Covid 19" />
    <meta name="author" content="Khulafaur Rasyidin" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/main/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/main/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <!-- Animate Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.min.css">

    <!-- Custom style Css -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/color/default.css" rel="stylesheet" id="option-color">
    <!-- DataTables.net  -->
    <link rel="stylesheet" type="text/css" href="stylesheet" href="<?= base_url(); ?>assets/main/css/addons/datatables.min.css">
    <link rel="stylesheet" href="stylesheet" href="<?= base_url(); ?>assets/main/css/addons/datatables-select.min.css">
    
    

</head>

<body>
    <!-- Main Navigation -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>COVID19</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#developers">Developers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hotline">Hotline Corona</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- Main Navigation -->
    <!-- START HOME -->
    <section class="section jarallax h-100vh" data-jarallax='{"speed": 0.2}' style="background-image: url('<?= base_url(); ?>/assets/images/header-bg.jpg');min-height:550px" id="home">
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
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12" style="margin-top:5%">
                    <div class="text-center">
                        <h2>Total <span class="font-weight-bold">Keseluruhan Data</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">Data akan terus diupdate secara realtime.</p>
                    </div>
                </div>
            </div>
            <!-- Section: Intro -->
            <section class="mt-md-4 pt-md-2 mb-5 pb-4">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="far fa-sad-tear warning-color mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">Total Positif</p>
                                    <h4 class="font-weight-bold dark-grey-text"><?= $positif['value']; ?> </h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= $positif['value']; ?> Orang Positif Corona</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="fas fa-smile success-color mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">Total Sembuh</p>
                                    <h4 class="font-weight-bold dark-grey-text"><?= $sembuh['value']; ?> </h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar success-color accent-2" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= $sembuh['value']; ?> Orang Telah Sembuh</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="fas fa-sad-cry bg-danger lighten-1 mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">Meninggal</p>
                                    <h4 class="font-weight-bold dark-grey-text"><?= $meninggal['value']; ?></h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar red accent-2" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= $meninggal['value']; ?>Telah Meninggal</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-0">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <img src="<?= base_url(); ?>/assets/images/indo.png" style="height:100px">
                                <div class="data">
                                    <p class="text-uppercase">Indonesia</p>
                                    <h5 class="font-weight-bold dark-grey-text"><b class="text-warning"><?= $dataIndonesia['positif']; ?></b> <span style="color:grey">Positif</span></h5>
                                    <h5 class="font-weight-bold dark-grey-text"><b class="text-success"><?= $dataIndonesia['sembuh']; ?></b> <span style="color:grey">Sembuh</span></h5>
                                    <h5 class="font-weight-bold dark-grey-text"><b class="text-danger"><?= $dataIndonesia['meninggal']; ?> </b><span style="color:grey">Meninggal</span></h5>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center" style="padding:0px">
                                <p class="card-text">-</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Intro -->

            <!-- Section: Grafik -->
            <section>
                <div class="col-xl-12 col-lg-12 mb-2 pb-2">

                    <!-- Chart -->
                    <div class="view view-cascade gradient-card-header blue-gradient">

                        <canvas id="lineChart" height="115"></canvas>

                    </div>

                </div>
            </section>
            <!-- Section: Grafik -->

            <!--- TABLE -->
            <div class="col-xs-12 col-lg-12 mb-2 pb-2 white p-3 mb-5">
                <h3>Kasus Coronavirus Di Indonesia</h3>
                <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Umur
                            </th>
                            <th class="th-sm">Gender
                            </th>
                            <th class="th-sm">WN
                            </th>
                            <th class="th-sm">Status
                            </th>
                            <th class="th-sm">Jenis Kasus
                            </th>
                            <th class="th-sm">Dirawat di
                            </th>
                            <th class="th-sm">Positif Sejak
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach ($total as $rows) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $rows->Usia; ?></td>
                            <td><?= $rows->JK; ?></td>
                            <td><?= $rows->WN; ?></td>
                            <td><?= $rows->Status; ?></td>
                            <td><?= $rows->JenisKasus; ?></td>
                            <td><?= $rows->DirawatDi; ?></td>
                            <td><?= $rows->Positif; ?></td>
                        </tr>
                    <?php } ?>
                     
                </table>
            </div>
            <!--- TABLE -->
            <!--- TABLE -->
            <div class="col-xs-12 col-lg-12 mb-2 pb-2 white p-3 mb-5">
                <h3>Kasus Coronavirus Di Dunia</h3>
                <table id="dtVerticalScrollExample2" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Negara
                            </th>
                            <th class="th-sm">Positif
                            </th>
                            <th class="th-sm">Sembuh
                            </th>
                            <th class="th-sm">Meninggal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php  $no=1; for ($i=0; $i < $totalData ; $i++) { 
                         $index=0;  foreach ($global[$i] as $row){ ?>
                            <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['Country_Region']; ?></td>
                            <td><?= $row['Active']; ?></td>
                            <td><?= $row['Recovered']; ?></td>
                            <td><?= $row['Deaths']; ?></td>
                            </tr>
                        <?php  } 
                    }
                    ?>
                    
                 
                    
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <th>No
                            </th>
                            <th>Negara
                            </th>
                            <th>Positif
                            </th>
                            <th>Sembuh
                            </th>
                            <th>Meninggal
                            </th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
            <!--- TABLE -->


            <!--Section: Content-->
            <section class="team-section text-center dark-grey-text mb-3" id="developers">

                <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Team</h6>
                <!-- Section heading -->
                <h2 class="font-weight-bold text-center dark-grey-text pb-2">Developers</h2>
                <hr class="w-header my-4">
                <!-- Section description -->
                <p class="lead text-center text-muted pt-2 mb-5">Website ini kita buat dengan penuh dedikasi untuk seluruh masyarakat</p>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mb-6">

                        <div class="w-200 mx-auto mb-4">
                            <img src="<?= base_url(); ?>/assets/images/idin.jpeg" class="z-depth-1 rounded-circle img-fluid" alt="smaple image" style="height:200px">
                        </div>
                        <h6 class="font-weight-bold">Khulafaur Rasyidin</h6>
                        <small class="text-muted">Chief Technology Officer<br>(Informatics Student at Telkom University)</small>
                        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 red-text">
                            <li><a href="https://www.linkedin.com/in/khulafaur-rasyidin-82ba1816b/"><i class="fab fa-linkedin-in mx-2"></i></a></li>
                            <li><a href="https://www.instagram.com/kultusanmu/"><i class="fab fa-instagram mx-2"></a></i></li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 mb-6">

                        <div class="w-200 mx-auto mb-4">
                            <img src="<?= base_url(); ?>/assets/images/adnan.jpeg" class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image" style="height:200px">
                        </div>
                        <h6 class="font-weight-bold">Adnan Imam Hidayat</h6>
                        <small class="text-muted">Front-End Developer<br>(Informatics Student at Telkom University)</small>
                        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 red-text">
                            <li><a href="https://www.linkedin.com/in/adnanimamhidayat/"><i class="fab fa-linkedin-in mx-2"></i></a></li>
                            <li><a href="https://www.instagram.com/adnanimamhidayat/"><i class="fab fa-instagram mx-2"></i></a></li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Content-->

        </div>
        <!-- Footer -->
        <footer class="page-footer font-small black pt-4" id="hotline">
            <div class="container-fluid text-center text-md-left">
                <h4 class="text-white first-title mb-0">PUSAT INFORMASI COVID19</h4>
                <p class="text-white mt-0">Layanan darurat via telepon yang disediakan oleh Kemkes dan juga Pemprov DKI Jakarta</p>
                <div class="row">
                    <div class="col-md-3 mt-md-0 mt-3">
                        <h5 class="text-uppercase font-weight-bold">021-5210-411</h5>
                        <p>Kementerian Kesehatan Republik Indonesia</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase font-weight-bold">0812-1212-3119</h5>
                        <p>Kementerian Kesehatan Republik Indonesia</p>

                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase font-weight-bold">112</h5>
                        <p>Pemerintah Provinsi DKI Jakarta</p>

                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase font-weight-bold">0813-8837-6995</h5>
                        <p>Pemerintah Provinsi DKI Jakarta</p>

                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright
                - Made By
                <a href="https://www.linkedin.com/in/khulafaur-rasyidin-82ba1816b/"> Khulafaur Rasyidin</a> and
                <a href="https://www.linkedin.com/in/adnanimamhidayat/"> Adnan Imam Hidayat</a> Thanks to
                <a href="https://hack.co.id/"> Ethical Hacker Indonesia </a>
                <!--&-->
                <!--<a href="https://kawalcovid19.id/"> KawalCovid19</a>-->
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </main>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="<?= base_url(); ?>assets/main/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/mdb.min.js"></script>
    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>
    <!-- DataTables  -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/addons/datatables.min.js"></script>
    <!-- DataTables Select  -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/addons/datatables-select.min.js"></script>

    <!--PARTICLES ANIMATE JS-->
    <script src="<?= base_url(); ?>/assets/js/particles.js"></script>
    <script src="<?= base_url(); ?>/assets/js/particles.app.js"></script>

    <script>
        $(".simple-text-rotate").textrotator({
            animation: "fade",
            speed: 3500
        });

    </script>
    <!-- Charts -->
    <script>
        // Small chart
        $(function() {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#FF5252",
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        // Main chart
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                // -- ARRAY LABEL 
                labels: ["2 Mar", "3 Mar", "4 Mar", "5 Mar", "6 Mar", "7 Mar", "8 Mar", "9 Mar", "10 Mar", "11 Mar", "12 Mar", "13 Mar", "14 Mar", "15 Mar", "16 Mar", "17 Mar", "18 Mar"],
                datasets: [{
                    label: "Total Positif",
                    fillColor: "#fff",
                    backgroundColor: 'rgba(255, 255, 255, .3)',
                    borderColor: 'rgba(255, 255, 255)',
                    //-- ARRAY DATA STATIKSIK
                    data: [2, 2, 2, 2, 4, 4, 6, 19, 27, 34, 34, 69, 96, 117, 134, 172, 227],
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: "#fff",
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                }
            }
        });

        $(document).ready(function() {
            $('#dtVerticalScrollExample').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
            });
            $('.dataTables_length').addClass('bs-select');
            $('#dtVerticalScrollExample2').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
            });
            $('.dataTables_length').addClass('bs-select');
        });

    </script>
</body>

</html>
