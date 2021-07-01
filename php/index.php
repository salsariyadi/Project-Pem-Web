<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="veiwport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/styleCSS.css">
        <title>Nama Band</title>
    </head>
    <body>
        <div class="container-fluid">

            <div class="jumbotron jumbotron-fluid p-5 bg-dark text-white">
                <div class="container">
                    <h1>Caption</h1>
                    <h5>Isiin dong</h5>
                </div>
            </div>

            <div class="row border">

                <div class="col-sm-3 border">
                    <nav class="navbar bg-dark navbar-dark p-4">
                        <ul class="navbar-nav">
                            <a class="navbar-brand" href="login.html">Login</a>
                            <a class="navbar-brand" href="daftar.html">Daftar</a>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">Profile Band</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="store.html">Store</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.html">About Us</a>
                            </li>
                            <li class="nav">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </nav>
                    <br>
                    <h5>Selamat Datang</h5>
                    <p>
                        Dapatkan info menarik seputar <br>
                        profil band, merchandise, info tour, <br>
                        dan masih banyak lagi di website ini.
                    </p>
                </div>

                <div class="col-sm-9 border">
                    <div id="carouselCaption" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselCaption" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselCaption" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselCaption" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/slide1.jpg" class="d-block w-100" height="650" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>"You can't run away from pain..."</h5>
                                    <p>New album is coming</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/slide2.jpg" class="d-block w-100" height="650" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>"My job is to give the lyrics a soul. I want people to hear someone hurting"</h5>
                                    <p>Sam Carter reveal his drive for perfection as a vocalist</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/slide3.jpg" class="d-block w-100" height="650" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Architects announce For Those That Wish To Exist U.S. headline tour</h5>
                                    <p>can't wait!</p>
                                </div>
                            </div>
                        </div>
                    
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaption" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCaption" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="row border mt-4">

                <div class="col-sm-3 border">

                </div>

                <div class="d-flex flex-column col-sm-9 p-3">
                    <div class="flex-item">
                        <img src="../img/tourLogo.png" class="img-thumbnail" alt="Tour">
                        <a class="link" href="tour.html"><h3>INFO TOUR</h3></a>
                        <h4>Ketahui tentang jadwal tour kami lebih lanjut</h4>
                    </div>
                    <br>
                    <div class="flex-item">
                        <img src="../img/merchLogo.png" class="img-thumbnail" alt="Merchandise">
                        <a class="link" href="merchandise.html"><h3>MERCHANDISE</h3></a>
                        <h4>Anda bisa membeli merchandise kami dengan mengunjungi link diatas.</h4>
                    </div>
                </div>

            </div>

        </div>

        <footer class="text-center bg-light">
            <section class="">
                <div class="container">

                    <div class="row border">

                        <div class="col-sm-7 border p-3">
                            <h6 class="text-uppercase mb-4">
                                <i class="me-3"></i>Band <strong>Website</strong>
                            </h6>
                            <p align="justify">
                                Nantikan konser kami di kota Anda!
                            </p>
                        </div>

                        <div class="col-sm-5 border p-3">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Kontak Kami
                            </h6>
                            <p><i class="me-3"></i>Instagram</p>
                            <p><a class="link" href="https://www.instagram.com/husenm52/">@husenm52</a></p>
                            <p><a class="link" href="https://www.instagram.com/salsabl.r/">@salsabl.r</a></p>
                            <p><a class="link" href="https://www.instagram.com/dimaswicakk/">@dimaswicakk</a></p>
                        </div>

                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row border">

                        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                            2021 Copyright: Muhammad Al-Husain Syah & Salsabila Riyadi Eka Putri & Dimas Wicaksono
                            <a class="link" href="https://www.upnyk.ac.id/"><strong>UPNYK</strong></a>
                        </div>

                    </div>
                </div>
            </section>
        </footer>

        <script type="text/javascript" src="../bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../jquery-3.6.0.js"></script>
    </body>
</html>
<?php } ?>
