<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>LokerCuy-Info loker</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index-pelamar.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>LokerCuy</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index-pelamar.php">Home</a></li>
                    <li><a href="Loker.php" class="active">Lowongan Kerja</a></li>
                    <li><a href="#">Perusahaan</a></li>
                    <a class="get-a-quote" href="get-a-quote.html">profile</a>

                    </li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/loker.jpg')">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Lowongan Kerja</h2>
                            <p>
                                Halaman Lowongan Kerja kami menyajikan informasi lengkap tentang persyaratan, tugas, dan
                                tanggung jawab dari setiap posisi pekerjaan yang tersedia, sehingga kamu bisa menentukan
                                apakah pekerjaan tersebut sesuai dengan keinginanmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index-pelamar.php">Home</a></li>
                        <li>Lowongan Kerja</li>
                    </ol>
                </div>
            </nav>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <form method="post" action="">
            <label for="kategori">Kategori Pekerjaan:</label>
            <select id="kategori" name="kategori">
                <option value="">- Pilih Kategori -</option>
                <option value="IT">IT</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Marketing">Marketing</option>
            </select>

            <label for="gaji">Range Gaji:</label>
            <select id="gaji" name="gaji">
                <option value="">- Pilih Range Gaji -</option>
                <option value="1">Rp. 0 - 5 juta</option>
                <option value="2">Rp. 5 juta - 10 juta</option>
                <option value="3">Rp. 10 juta - 20 juta</option>
            </select>

            <input type="submit" value="Filter" name="filter">
        </form>



        <body>
            <header>
                <h1>Informasi Lowongan Kerja</h1>
            </header>

            <main>
                <section>
                    <h2>Lowongan Kerja Terbaru</h2>
                    <ul>
                        <li>
                            <h3>Nama Pekerjaan</h3>
                            <p>Deskripsi pekerjaan dan persyaratan.</p>
                            <a href="#">Lihat Selengkapnya</a>
                        </li>
                        <li>
                            <h3>Nama Pekerjaan</h3>
                            <p>Deskripsi pekerjaan dan persyaratan.</p>
                            <a href="#">Lihat Selengkapnya</a>
                        </li>
                        <li>
                            <h3>Nama Pekerjaan</h3>
                            <p>Deskripsi pekerjaan dan persyaratan.</p>
                            <a href="#">Lihat Selengkapnya</a>
                        </li>
                    </ul>
                </section>

                <section>
                    <h2>Cara Melamar Pekerjaan</h2>
                    <ol>
                        <li>Cari pekerjaan yang sesuai dengan minat dan kemampuan Anda.</li>
                        <li>Baca dan pahami persyaratan dan deskripsi pekerjaan dengan teliti.</li>
                        <li>Kirimkan CV dan surat lamaran kerja ke alamat yang tertera pada iklan lowongan kerja atau
                            website perusahaan.</li>
                        <li>Tunggu balasan dari perusahaan dan siapkan diri untuk mengikuti tes atau wawancara kerja.
                        </li>
                    </ol>
                </section>
            </main>

        </body>

</html>

<!-- ======= Stats Counter Section ======= -->



<footer id="footer" class="footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>LokerCuy</span>
                </a>
                <p>
                    Kami membantu Anda mengambil langkah selanjutnya dalam karir Anda
                </p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">


                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        jl. Dr.ciptomangunkusumo <br />
                        Sekupang,Batam<br />
                        Indonesia <br /><br />
                        <strong>Phone:</strong> +62 821 7148 7042<br />
                        <strong>Email:</strong> muthiaandinii22@gmail.com<br />
                    </p>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>mthnd</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->

            </div>
        </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>