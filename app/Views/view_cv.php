<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CV Ujang </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="aset/img/favicon.png" rel="icon">
    <link href="aset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="aset/vendor/aos/aos.css" rel="stylesheet">
    <link href="aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="aset/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Pendidikan</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Kontak</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <b>
                <h2>Fortopolio</h2>
            </b>
            <h1>Ujang Aris Ramdani</h1>
            <p>Saya Adalah <span class="typed" data-typed-items="Mahasiswa UMMI,"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>TENTANG SAYA</h2>
                    <p></p>
                </div>


                <!-- <div class="row">
        <div class="col-lg-4">
        </div> -->
                <?php

                foreach ($cv as $row) {
                    echo '
                        
                        <div class="row">
                        <div class="col-lg-4">
                                <img src="' . base_url('aset/img/' . $row['foto']) . '"class="img-fluid" alt="">
                        </div>
                        ';
                }
                ?>
                <!-- <div class="col-lg-4"> -->
                <!-- <img src="aset/img/2.jpg" class="img-fluid" alt=""> -->
                <!-- </div> -->


                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Dibawah ini adaah biodata tentang saya</h3>
                    <p class="fst-italic">

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong>
                                    <!-- <span>5 Juli 2002</span> -->

                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Nama'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>Tanggal lahir:</strong>
                                    <!-- <span>5 Juli 2002</span> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Tanggal_lahir'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong>
                                    <!-- <span>www.example.com</span></li> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Alamat'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong>
                                    <!-- <span>www.example.com</span></li> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Umur'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>Agama:</strong>
                                    <!-- <span>www.example.com</span></li> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Agama'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>No Hp:</strong>
                                    <!-- <span>+123 456 7890</span></li> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['No_Hp'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>

                                <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong>
                                    <!-- <span>New York, USA</span></li> -->
                                    <?php
                                    foreach ($cv as $row) {
                                        echo '
                        <tr>
                            <td>' . $row['Hobi'] . '</td>
                        </tr>
                        ';
                                    }
                                    ?>
                            </ul>
                        </div>
                    </div>
                    <p>

                    </p>
                </div>
            </div>

            </div>
        </section><!-- End About Section -->




        <!-- ======= Resume Section ======= -->
        
        <section id="resume" class="d-flex flex-column justify-content-center">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PENDIDIKAN</h2> 

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title"></h3>
                        <div class="resume-item pb-0">
                            <h4 center>Riwayat Pendidikan</h4>
                            <p><em></em></p>
                            <ul>
                                <li>2006 - 2012 : SDN NEGERI CIDADAP</li>
                                <li>2012 - 2015 : SMP NEGERI 2 KADUDAMPIT</li>
                                <li>2015 - 2018 : SMK NEGERI 2 SUKABUMI</li>
                                <li>2021 - Sekarang : UNIVERSITAS MUHAMMADIYAH SUKABUMI</li>
                            </ul>
                        </div>
                   
        </section><!-- End Services Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pengalaman Kerja</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title"></h3>
                        <div class="resume-item pb-0">
                            <h4 center>Riwayat Pengalaman</h4>
                            <p><em></em></p>
                            <ul>
                                <li>2019 - 2019 Magang di PT.Limawira Wisesa, Jakarta</li>
                                <li>2020 - Sekarang Bekerja di Bappenas Sebagai Teknisi </li>
                            </ul>
                        </div>
        </section>





        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>KONTAK</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title"></h3>
                        <div class="resume-item pb-0">
                            <h4 center></h4>
                            <p><em></em></p>
                            <ul>
                               
                                <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>ujangarisramdani@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Tlp:</h4>
                                    <p>085795186987</p>
                                </div>

                                <div class="col-lg-4">
                                    <img src="aset/img/" class="img-fluid" alt="">
                                </div>


                            </ul>
                        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section>


    </section>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="aset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="aset/vendor/aos/aos.js"></script>
    <script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="aset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="aset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="aset/vendor/typed.js/typed.umd.js"></script>
    <script src="aset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="aset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="aset/js/main.js"></script>

</body>

</html>